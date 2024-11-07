<!DOCTYPE html>
<html lang="en&ko-KR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="./css/signUp.css">
</head>
<body>
    <main>
        <div class="signUpWrapper">
            <a href="./main.php">
                <img src="./images/hanzan_logo.svg" alt="logo" class="logoImg">
            </a>
            <p class="signUpTitle">HANZAN에 가입하세요!</p>
            <p class="signUpDescription">HANZAN은 위스키 제조법을 알려주는 서비스입니다!</p>
        </div>

        <form action="" method="" class="formContainer">
            <p class="formLabel">아이디</p>
            <input type="text" required>

            <p class="formLabel">비밀번호</p>
            <input type="password" required>

            <p class="formLabel">비밀번호 확인</p>
            <input type="password" required>

            <p class="formLabel">이메일</p>
            <input type="email" required>

            <p class="formLabel">전화번호</p>
            <input type="tel" required>

            <p class="signInBtnWrapper">
                이미 회원이신가요?
                <a href="./signIn.php" class="signInBtn">로그인</a>
            </p>

            <input type="submit" value="회원가입" class="signUpBtn">
        </form>
    </main>
</body>
</html>
