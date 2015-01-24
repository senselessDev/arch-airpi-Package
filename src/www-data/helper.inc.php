<?php
function runCommand($command, $answer_required = FALSE)
{
      	putenv('PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/local/games:/opt/node/bin:/opt/vc/bin');
	 if (strpos($command,'__AVAHI_REPLACE_HOSTNAME') !== false) {
                $hostname = exec("avahi-browse -rpt _rtp._udp | sed -n '1!p' | cut -s -d\; -f7");
                $command = str_replace("__AVAHI_REPLACE_HOSTNAME", $hostname, $command);
        }
        if (strpos($command,'__AVAHI_REPLACE_PORT') !== false) {
                $port = exec("avahi-browse -rpt _rtp._udp | sed -n '1!p' | cut -s -d\; -f9");
                $command = str_replace("__AVAHI_REPLACE_PORT", $port, $command);
        }
	if(!$answer_required)
		$command = $command." > /dev/null &";
	return exec($command, $ret);
}

function shellCmd($command, $answer_required = FALSE)
{
	return runCommand($command, $answer_required);
}

function getYesNo()
{
	$row = "<tr>
				<td><button type='submit' name='do' value='yes'>YES</button></td>
				<td><button type='submit' name='do' value='no'>NO</button></td>
			</tr>";
	return $row;
}

?>
