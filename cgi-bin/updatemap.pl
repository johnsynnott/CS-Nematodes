#!/usr/bin/perl -wT

# File: file_upload.cgi
# This file handles the uploading of lab XML files
# to the server, including multiple sets of error
# checking and invalid file checks.
# Authors: Nate Miller - nwmiller@wpi.edu, John Synnott - john@wpi.edu

use strict;
use CGI;
use CGI::Carp qw (fatalsToBrowser);
use File::Basename;
use warnings;

$CGI::POST_MAX = 1024 * 5000;							# max upload file size
my $safe_chars = "a-zA-Z0-9_.-";						# valid filename characters	
my $directory = "/home/john/public_html/nematode";
my $filename = "map.json";		# upload directory

my $cgi_query = new CGI;							# new CGI query
print $cgi_query->header();							# print the CGI content header

my $data = $cgi_query->param('compJSON');				# get the JSON
my $password =$cgi_query->param('password');			# get the password

# Check if the password is incorrect
if ($password ne "supersecret") {
	# GENERATE INFO PAGE AND PASS ERROR MESSAGE
	my $err_msg1 = "Incorrect password";
	genUploadInfoPage($err_msg1);	# generate the info page and display error message
	exit;	# exit script execution
}

# Open the file handle and upload the file to the upload directory
open (UPLOADFILE, ">$directory/$filename") or die "$!";
binmode(UPLOADFILE);	# read/write in binary or text mode
print UPLOADFILE "$data";
close(UPLOADFILE);# Clean up and close the file handle(s)

# map update is successful if we get here
my $success_msg = "Map successfully updated!";	# Success message
genUploadInfoPage($success_msg);					# Generate page and display msg

# Generate the upload information page
# Display any messages passed to the subroutine,
# such as error or success messages.
sub genUploadInfoPage {
	# Grab the info message passed to the subroutine.
	# This message will be displayed to the user on the page,
	# e.g. for errors or success info.
	my $message = $_[0];	

	# Generate the HTML and head sections
	print
	"<!DOCTYPE html>
	<html>
	<head>
	<meta charset=\"UTF-8\">
	<title>Map updater</title>
	</head>";

	# Generate the first half of the body
	print "<body>
	<h3>$message</h3>
	<p>Changes May take up to 30 seconds to show up</p>
	<a href=\"http://users.wpi.edu/~john/nematode/data.html\">View map</a>
	<a href=\"http://users.wpi.edu/~john/nematode/edit.html\">Go back to edit</a>";	# Display the message to the user

	# Generate the rest of the page
	print
	"</body>
	</html>";
}