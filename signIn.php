<!DOCTYPE html>
<html lang="en&ko-KR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/signIn.css">
</head>
<body>
    <main>
        <div class="signInWrapper">
            <a href="./main.php">
                <img src="./images/hanzan_logo.svg" alt="logo" class="logoImg">
            </a>
            <p class="signInTitle">HANZAN에 오신것을 환영합니다!</p>
            <p class="signInDescription">HANZAN은 위스키 제조법을 알려주는 서비스입니다!</p>
        </div>
        
        <form action="" method="" class="formContainer">
            <p class="formLabel">아이디</p>
            <input type="text" required>

            <p class="formLabel">비밀번호</p>
            <input type="password" required>

            <p class="signUpBtnWrapper">
                아직 회원이 아니신가요?
                <a href="./signUp.php" class="signUpBtn">회원가입</a>
            </p>

            <input type="submit" value="로그인" class="loginBtn">

        </form>
    </main>
</body>
</html>
