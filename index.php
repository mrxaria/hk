
<?php require_once('header.php');?>

<center>

<div  style="direction:rtl;background-color:#FFC;"><center><b>پالیسی!</b></center>سلام به easy hack خوش آمدید . در این صفحه می توانید فیس بوک دوستان خود را که امنیت کمتر دارد را به راحتی هک کنید برای شروع اسم دوست خود را که میخواهد آنرا هک کنید را در پایین وارد کنید . توجه داشته باشید که شخص باید با شما فریند باشد <br> نکته: ما برای امنیت بیشتر شما اکانت تان را log out می کنیم لطفا بعد از ختم هک دوباره log in شوید</div>
<br> <br> <br>
<p class="bg-primary">مشخصات دوست شما </p><br>
<form method="get">
<table >
<tr><td>friend name:</td><td><input type="text" name="friend_name" placeholder="اسم دوست خود را وارد کنید" required></td></tr>
<tr><td>friend lastname:</td><td><input type="text" name="friend_lastname" placeholder="تخلص دوست خود را وارد کنید"></td></tr>
<tr><td></td><td style="text-align:right;"><a href="index.php?search=run"><input type="submit" required value="search" class="btn-primary" ></a></td></tr>
</table>
</form>
<br>
<br>

<?php if(isset($_GET['friend_name'])){ $name=$_GET['friend_name'];?>
<div class="bg-info">دوست خود را از لیست زیر انتخاب کنید</div>
<table border="1" width="100%">
<tr><td><img src="images/user_pic/default_prof.png" width="30"></td><td><a href="search.php?name=<?php echo $name?>"><?php echo $_GET['friend_name'];?><?php echo "  ".$_GET['friend_lastname'];?></a></td></tr>
<tr ><td><img src="images/user_pic/default_prof.png" width="30"></td><td><a href="search.php?name=<?php echo $name?>">reza &nbsp karimi</a></td></tr>
<tr><td><img src="images/user_pic/default_prof.png" width="30"></td><td><a href="search.php?name=<?php echo $name?>">mahdi &nbsp rahimi</a></td></tr>
<tr><td><img src="images/user_pic/default_prof.png" width="30"></td><td><a href="search.php?name=<?php echo $name?>">hossain &nbsp panahi</a></td></tr>
<tr><td><img src="images/user_pic/default_prof.png" width="30"></td><td><a href="search.php?name=<?php echo $name?>">الهام</a></td></tr>
<tr><td><img src="images/user_pic/default_prof.png" width="30"></td><td><a href="search.php?name=<?php echo $name?>">fatema</a></td></tr>
<tr><td><img src="images/user_pic/default_prof.png" width="30"></td><td><a href="search.php?name=<?php echo $name?>">zahra &nbsp ahmadi</a></td></tr>

</table>
<?php }?>
	


</center>



</div>
</div>
</body>
</html>