<?php

$master = "master"; // Your master branch name to production
$pathOnServer = ""; // Path to your website on your server
$username = ""; // User for your server
$ipServer = ""; // IP for your server
$portServer = ""; // Port for your server
$passwordServer = ""; // Password for your server

print "Pushing to production";
print shell_exec("git add .");
print shell_exec("git commit -m 'Push to production'");
print shell_exec("git push origin " . $master);
print "Connect to your server";
print shell_exec("ssh " . $username . "@" . $ipServer . " -p " . $portServer);
print shell_exec($passwordServer);
print shell_exec("cd " . $pathOnServer);
print shell_exec("git checkout " . $master);
print shell_exec("git pull origin " .$master);