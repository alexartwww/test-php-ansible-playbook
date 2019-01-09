<?php
echo '<pre>'.shell_exec('cat /proc/cpuinfo').'</pre>';
echo '<pre>'.shell_exec('cat /proc/meminfo').'</pre>';
echo '<pre>'.shell_exec('df').'</pre>';
echo '<pre>'.shell_exec('df -i').'</pre>';
