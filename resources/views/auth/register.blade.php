<div class="register">
    <div class="register-container">
        <div class="register-card">
            <!-- <button class="close-button">&times;</button> -->
            <div class="logo">
                <img src="https://github.com/PHPD08-Village/PHPD08-Team/blob/main/img/Icon/LOGO-M.png?raw=true"
                    alt="LanceDom Logo" alt="Logo">
                <h1>LanceDom</h1>
            </div>
            <!-- Laravel Registration Form -->
            <form method="POST" action="{{ route('register') }}" class="register-form">
                @csrf

                <!-- Name -->
                <label for="name">名稱 (Name)</label>
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"
                    required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                <!-- Email Address -->
                <label for="email">信箱 (Email)</label>
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                <!-- Password -->
                <label for="password">密碼 (Password)</label>
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />

                <!-- Confirm Password -->
                <label for="password_confirmation">確認密碼 (Confirm Password)</label>
                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                <!-- Terms Checkbox -->
                <div class="terms">
                    <label for="agree">
                        <input type="checkbox" id="agree" style="width: auto;" required>
                        我同意條款和隱私
                    </label>
                </div>

                <button type="submit" class="register-button">註冊</button>
            </form>

            <div class="divider">或</div>
            <div class="social-login">
                <a href="{{ route('login.line') }}" class="social-btn">
                    <img src="https://github.com/PHPD08-Village/PHPD08-Team/blob/main/img/Icon/LINE%20(G).png?raw=true"
                        style="width: 50px;" alt="LINE">
                </a>
                <a href="{{ route('login.google') }}" class="social-btn">
                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAABTVBMVEX////qQzU0qFNChfT7vAU/g/RZlPU5gPT7uQCxyPqXufn/vQDpNCLqQTMwp1D7uADpOCfqPS4fo0bpMiD8wADpLxwopUv0paD1q6b86ObpOiv4/Pn+9/b4xcH2ubX1r6rsXVIre/NwvoOf0qvO6NQzqUm/4cf5zMn739zrSz398O/sVEjvdWz2t7PvenP4ycb7wir96Lf+8tb8zFH93pj+9eH//PD92Yvw9v7+7cP80Xb95q6pxPnq9u1PsmigvvlunvaJyZiGrvjD1vvyl5HtamHoJgzwhH3zmpTtXlLvenHuYSzygCL2mxjsUzDwcSf0jx34phH8z2DxfVHX5P38x0KHvnDOtiGjsjJ0rkLhuRW4tCnS4PyMsDtZq0it2bhmmvbO5OE1noBft3U1pWA/jNc8lLk5nJNBieSSy58+j8t5wIo6mKY2o25FrmBHQXgmAAAIJUlEQVR4nO2b2V/bRhCAhbADxJLQYQvwgcE2PsAhEHK0SUxigoGkTdMj6ZXDTdw2JbT+/x9r+QDZllYra8da85vvKU/yfszszO5IEQQEQRAEQRAEQRAEQRAEQRAEQRAEQRAEQRAEQRDWpLfXSplbqysWq9n1Unk7HfaSmJFey6ycNipGwpDUAZKRSMxt7B6vl7fDXl5QyqvVHdVQk5o8N4osa0nJqDSOSzNrmc7sVlRVk8fl7J4dTbmRXQt7sf5JZ6onkkPknC3VxE52tiJZPtUMjcru0lI1dkthL5uaTMNI0kVvOJLGRnYmCmx2R/IXPpukVFnh3nG9IvkPn81R1bJhKxC5vWME8evHMRO2hitr1URQv65jospp81jRkgz8LJLaStgyDpSfqywC2ENWN7gL48rJpAXUGe3kVthKQ2w3DKZ+c9ZuPOWocZQqrHagHY4yNRuoBbqjaZyc444D90A35AQPmzFdlYD8uorht410Q4UTnJON0A3TOxA15pLE6nUXvOYRlI3wI9gAFZRCFxReQBaZufAjKBwDtgkeioyQZX4UtcFDIyz5PqrJsqYlk2oymdQ8hqhc7MHtih9Ba+4rVTaqp6fHZ2fHp7sNaxDuPk3lQVCo+iijmmQ0zjJr9ncx6e3Syq6WcBk6crAHhVXqTSirJ7sZ53l2unQsGQ6R5GAPCuUT2vCpz28RL7K3q+pIIDlo9B026EYWmlT1vuGVT1X707jYg8IKVauXjQbdDbZctd0wuYjgGtU7peTcOvUTM/KgcPFQZDqnNYo6Khu7fh6ZftENo8yHYCnhLajN+R3NZzsFh489KAg73jk6yZisXNE4EVz3boXG7iSjzrUKH4KC93EtcTzZkzmZAD9a/obsJ0tnYa8xEKm9SPxboqHEwZkrCPuLkUj8JSFRpdOwlxiQg0iH+PJ3boJqNewVBuTOYqSrGH/lLKjtcFIuJuZhz7Dj+L1jldHKYa8wIKnIJfEfHDJVoj+Kcsr+sk1xvG0kZ30T9uvMleNI25DV2fo2zYH7y5FhxZdDhgbfH/vQsL8YGVG0tw15J+z1BefHUcNIPPLqsvsbt8NeX2BSo35DbUPbCHt9wbkzFsJe2+iHkN/P0ai562gYiS9abUPeCHt5DDhwFOy3DZWT62sQ7u+5GVq3DY2bz3sm555zkvYUl38Ke3kM2F92N4wsPqJ8ytKNwLyGMnxAiGFk+T6t4WY0IJtLUIYPSYZ7tE9ZWpgPyMJNKMM3pCR9MD3D6FMgwftxUpLuT89wfh7KkMk2ZGG4CWR4j1RK49SPYWH4FYzh1yTDN1M1BGoXjwhZuvhwqobvYAxdzt09Q+pSysJw4VkIhnevvSHtmY2NIdChhnRom7Lh42tv+AQNJ4OjfRiG4XRraRiG0+2HQJWGnzMNVLcgnksPpmoI1PH5uVtAGXJ0PwQ6efNzx4e6PXEzpwG7AXMzawObYrCalwaftUWhDIkz72XqmffmAg0kwxtQhqT3FrH4z5RPeXeThiOC4cIRlCHh3VPsF0Wpsfyt14QgQh3aBPf3h7HYr6Jo5ln+FGm3QjV8wfXsHYv8Joqicsjyp46i7oZgzcLtPX7sd0W00IsMf4qwDcGG+oLLtxixt2IPpcXul95tuvuBvZixGP+eJhZ5Lw5gGMQj0jYEuv92GfsmKrb34VJQVNrMfmiBtA2Bzt1dRr9r6zQJ0YbeZPQ7pEoanYcrNMJIv+g2iSF0Rj2RVGZAt+Hwwa3XJIZQckx+hXh0Bd2GQ9V00CSGg8gkT28QduH8AtiXGD0ub1Cxtw6CIpOz2xPi7QPs2N2n3/RjsfcOft16mgr6E69JhRTwQ4wBB70M/eAs2DmeBu77xBwFT9JeSxxpEiNbsR7sB0jN3oKNBom98SYxohjokrFEOK/Ng1fSLo/GmwRDxWceEQS8V1whElI0aKI+I1aZTrsHu97bKepehqKem6yiegnCnkmvOPQMYqeiTtIXH296CEb/YO3iTME7iJ1M9n+V8qqinRDCzS+GyZkUivqFv0z9OO8pCDdGHKXmnaZWpio+wpi60D/d8FIEHEGNkqfIUyuMrQLd81J50RS3/vyLrDitXdiFotjQO9bybd16nmL+TVQEe+XkuCiqIHYdD5vk/Vi4UMzB32vrc9S9mi48nY5bH7o87TnquaKLZKpwruj2dNj67x/XMEancZyx0aKopzbJ1nmxVrN5pmq14nnL1EefoihfXBShPk9wpdam24qDlZu6Lh7mLur183r9Itc6FHXddLxDb/3rmKnA4xknaPr+WIDMHopC+PNsfXLqjNPOUYumf0U6ttrjbWNqp5kh6lCKytZo24B7ZUiG5vQ2GVuf5+2bcXrHtRFSfgqqT0V72wAecxMVD8EUTeXL5TwDfvpEUvTVM3wxaBvRKR64HRXBothpG91MhfvPeJSKcHuxd9sIW7CjmINqGt22Eb6gANgXLcWPYdt1aepA9UZRKK/Q4BREkM1otpl+hRSIWgsgUyedugKRZ52pSrD3HwDU2HZGU+RlC9rIk259/lDMOlcZOqCWY5Sq+iGHAexROGTgaJqsvssBoSgGdDTNcy4T1EYzQBwVU6nz0wPdKbbGpoR0fno7Pwt+FoW64jeQiuk+OeaSVDHnMhF10Zud8F3RkRSt2aiHXMdObDVnT69PoZlrm7qzpzUg1s12Ll+YpeR0IFUr5i9abd2iP/M2u/9ut+r5Ym3G7a5IpWqFYrOZt2g2i4VCLXVt3BAEQRAEQRAEQRAEQRAEQRAEQRAEQRAEQRAE4Yf/AZmODCZml4YgAAAAAElFTkSuQmCC"
                        style="width: 50px;" alt="Google">
                </a>
            </div>
            <div class="footer">
                <span>已經擁有帳號了？ <a href="{{ route('login') }}">登入</a></span>
            </div>
        </div>
    </div>
</div>

<script>
    function validatePassword() {
        const password = document.getElementById("password").value;
        const confirmPassword = document.getElementById("password_confirmation").value;

        if (password !== confirmPassword) {
            alert("密碼和確認密碼不相符！");
            return false; // 阻止表單提交
        }
        return true; // 密碼相符，允許表單提交
    }
</script>
