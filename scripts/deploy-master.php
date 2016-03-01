<?php

// Set your master name branch here
$master = "master";
$branches = explode(PHP_EOL, shell_exec("git branch -a"));
foreach ($branches as $k => $v) {
        $branches[$k] = trim(str_replace("*", "", $v));
}

// Initial remote empty array
$remotes = [];

foreach ($branches as $k => $v) {
        $remote = end(explode("/", $v));
        $remotes[$k] = $remote;
}

foreach ($remotes as $branch) {
	// Occasionnal bug when last key of array is empty
        if (empty($branch)) {
                print "This branch is empty, switching to another\n";
        } elseif ($branch == master) {
                // Nothing to do here
        } else {
                print shell_exec("git checkout " . $branch);
                $otp = shell_exec("git merge --no-ff " . $master);
                print $output;
        }
	// Stop the script, conflict while merging
        if (strtr($output == "CONFLICT")) {
                print "Fix your conflict, and launch script after that\n";
                exit(0);
        } else {
                print shell_exec("git push origin " . $branch);
        }
}

print "Master deployed successfully";
