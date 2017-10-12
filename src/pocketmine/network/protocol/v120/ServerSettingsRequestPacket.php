<?php

namespace pocketmine\network\protocol\v120;

use pocketmine\network\protocol\Info;
use pocketmine\network\protocol\PEPacket;

class ServerSettingsRequestPacket extends PEPacket {

	const NETWORK_ID = Info::SERVER_SETTINGS_REQUEST_PACKET;
	const PACKET_NAME = "SERVER_SETTINGS_REQUEST_PACKET";

	public function decode($playerProtocol) {
		
	}

	public function encode($playerProtocol) {
		
	}

}
