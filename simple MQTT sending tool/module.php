<?php

declare(strict_types=1);
	class simpleMQTTsendingtool extends IPSModule
	{
		public function Create()
		{
			//Never delete this line!
			parent::Create();
			$this->ConnectParent('{C6D2AEB3-6E1F-4B2E-8E69-3A1A00246850}'); //MQTT Server
		}

		public function Destroy()
		{
			//Never delete this line!
			parent::Destroy();
		}

		public function ApplyChanges()
		{
			//Never delete this line!
			parent::ApplyChanges();
		}

		public function Send(string $Text, string $ClientIP, int $ClientPort)
		{
			$this->SendDataToParent(json_encode(['DataID' => '{C8792760-65CF-4C53-B5C7-A30FCC84FEFE}', "ClientIP" => $ClientIP, "ClientPort" => $ClientPort, "Buffer" => $Text]));
		}

		protected function sendMQTT(string $Topic, string $Payload)
		{
			$mqtt['DataID'] = '{043EA491-0325-4ADD-8FC2-A30C8EEB4D3F}';
			$mqtt['PacketType'] = 3;
			$mqtt['QualityOfService'] = 0;
			$mqtt['Retain'] = false;
			$mqtt['Topic'] = $Topic;
			$mqtt['Payload'] = $Payload;
			$mqttJSON = json_encode($mqtt, JSON_UNESCAPED_SLASHES);
			$mqttJSON = json_encode($mqtt);
			$result = $this->SendDataToParent($mqttJSON);
		}	

		public function sendJson(string $Topic, array $Payload)
		{			
			$this->sendMQTT($Topic, json_encode($Payload));
			$this->SendDebug(__FUNCTION__,"sending to Topic: ".$Topic." with Payload: ".json_encode($Payload),0);
		}

		public function sendString(string $Topic, string $Payload)
		{
			$this->sendMQTT($Topic, $Payload);
			$this->SendDebug(__FUNCTION__,"sending to Topic: ".$Topic." with Payload: ".$Payload,0);
		}
	}