
<h3><?= $message ?? ''; ?></h3>
<div class="center">
<form method="post">
<input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
		<div class="blocks">
			<div class="block">
         <input type="text" name="FirstName"required placeholder="Фамилия">
			</div>
			<div class="block">
         <input type="text" name="LastName" required placeholder="Имя">
			</div>
			<div class="block">
         <input type="text"name="MiddleName" required placeholder="Отчество">
			</div>
			<div class="block">
         <input type="date"name="Birthday" required placeholder="Дата рождения">
			</div>
			

			<div class="block">
         <input type="text"name="login" required placeholder="login">
			</div>
         <div class="block">
         <input type="password"name="password" required placeholder="password">
			</div>
         
		
		<div class="block">
				<button>REGISTER</button>
			</div>
		</div>
</form>
	</div>
   <style>
   .center{
	margin-top: 50px;
	display: flex;
	justify-content: center;
}

.signup{
	color: #fff;
	font-size: 20px;
}
button{
   background-color: grey;
   width: 420px;
   height: 50px;
   color: pink;
   font-size: 25px;
   border-radius: 10px;
}
input{
   padding: 10px;
   width: 300px;
   border: 0;
   color: #2e65ee;
   border-radius: 10px;
   font-size: 20px;
}

.block{
	background-color: #D9D9D9;
	width: 352px;
	height: 82px;
	display: flex;
	align-items: center;
	justify-content: center;
	margin-top: 20px;
   border-radius: 20px;
}

.block > p {
	font-size: 24px;
}
</style>