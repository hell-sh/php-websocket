<?php
namespace WebSocket;
class TextFrame extends Frame
{
	const OP_CODE = 1;

	function __toString()
	{
		return "{TextFrame: ".$this->data."}";
	}
}
