<?php
interface sportss{
	public function play(); 
}

class football implements sportss{
	public function play()
	{
		echo "play football\n";
	}
}

class basketball implements sportss{
	public function play()
	{
		echo "play basketball\n";
	}
}

class pingpong implements sportss{
	public function play()
	{
		echo "play pingpong\n";
	}
}

