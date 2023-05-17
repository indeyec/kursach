<?php
if (app()->auth::User()->id):
?>
    <form action="#" class=""
          enctype="multipart/form-data" method="POST">
        <label for="avatar">Upload avatar</label>><br>
        <input type="file" name="avatar" id="avatar">
        <input type="submit" class="btn" value="Загрузить">
    </form>
    <img src="{{ $user->getAvatarUrl }}" class="mr-3" alt="Your Avatar">
<?php
endif;
?>
<div class="main_block">
        <div class="bloc">
        <h5>Фамилия</h5>
        <b><?= app()->auth->user()->LastName ?? ''; ?>
        </div>
            <div class="bloc">
        <h5>Имя</h5>
        <b><?= app()->auth->user()->FirstName ?? ''; ?>
        </b>
            </div>
        <div class="bloc">
        <h5>Отчество</h5>
        <b><?= app()->auth->user()->MiddleName ?? ''; ?>
        </div>
        <div class="bloc">
        <h5>Дата рождения</h5>
        <b><?= app()->auth->user()->Birthday ?? ''; ?>
        </div>

</div>
<!--<div class="side_block">-->
<!--    <h6>Друзья --><?//= app()->auth->user()->FirstName ?? ''; ?><!--</h6>-->
<!--    --><?php
//    if (!$users->getFriendsCount()):
//    ?>
<!--        <p>--><?//= app()->auth->user()->FirstName ?? ''; ?><!-- Нет друзей. </p>-->
<!---->
<!--    --><?php
//    else :
//    ?>
<!--        --><?php
//        foreach ($users->friends() as $friend) {
// //         include('user.partials.userblock')
//            echo '<p>' . $friend->FirstName . '</p>';
//        }
//        ?>
<!--    --><?php
//    endif;
//    ?>
<!--</div>-->
<style>

    .main_block{
        display: inline-block;
        align-items: center;
        margin-left: 20px;
        width: 950px;
        border: 2px solid black;
        margin-top: 50px;
    }
    .vidpodraz{
        width: 279px;
        height: 56px;
        background-color: #D9D9D9;
        margin-right: 20px;
        font-size: 20px;
        margin-left: 40px;
    }
    .bloco{
        display: flex;
        align-items: center;
        text-align: center;
        margin-top: -19px;
    }

    button{
        background-color: grey;
        width: 200px;
        height: 35px;
        color: pink;
        font-size: 25px;
        border-radius: 10px;
        margin-top: 10px;
    }

    button > a{
        text-decoration: none;
        color: pink;
    }
    .create{
        width: 236px;
        height: 56px;
        background-color: #D9D9D9;
    }
    .bloc {
        width: 200px;
        margin-left: 20px;
        display: inline-block;
        flex-direction: row;
        justify-content: center;
        align-items: center;
    }

    .avatar {
        width: 260px;
        height: 142px;
        text-align: center;
        font-size: 24px;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 40px;
    }

    .avatar > p {
        margin: 0;
        padding-top: 50px;
    }
</style>
