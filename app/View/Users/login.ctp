<?php
echo $this->form('User',array('url'=>array('controller'=>'users','action'=>'login')));

?>

<div>
	<div>
	<div>Login</div>
	<div><input type="text" value="" name="username" ></div>
	</div>

	<div>
	<div>Password</div>
	<div><input type="text" value="" name="password" ></div>
	</div>

	
	</div>

</form>
<?php

echo $this->form->end('null');

?>