<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | RNBPCHS Alumni Portal</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            margin: 0;
            color: #333;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* Header */
        header {
            background: #244f85;
            color: white;
            padding: 15px 35px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 12px;
        }

        header h2 {
            margin: 0;
            font-size: 21px;
        }

        header p {
            margin: 5px 0 0;
            font-size: 13px;
            color: #e0e9f5;
        }

        header a {
            color: white;
            text-decoration: none;
            font-size: 14px;
            padding: 9px 15px;
            border: 1px solid #ffffff80;
            border-radius: 4px;
        }

        header a:hover {
            background: white;
            color: #244f85;
        }

        /* Main */
        main {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 16px;
        }

        .login-card {
            background: white;
            width: 100%;
            max-width: 440px;
            padding: 32px 30px;
            border: 1px solid #ddd;
            border-radius: 6px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }

        .login-card h2 {
            margin: 0 0 6px;
            text-align: center;
            color: #244f85;
        }

        .login-card .subtitle {
            text-align: center;
            color: #777;
            font-size: 14px;
            margin: 0 0 24px;
        }

        .field {
            margin-bottom: 16px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 6px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        input:focus {
            outline: none;
            border-color: #244f85;
        }

        .password-wrap {
            position: relative;
        }

        .password-wrap input {
            padding-right: 60px;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #244f85;
            font-size: 12px;
            font-weight: bold;
            cursor: pointer;
            padding: 4px 6px;
        }

        .toggle-password:hover {
            text-decoration: underline;
        }

        .row-between {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 4px 0 18px;
            font-size: 13px;
            gap: 10px;
        }

        .row-between label {
            font-weight: normal;
            display: flex;
            align-items: center;
            gap: 7px;
            margin: 0;
        }

        .row-between input[type="checkbox"] {
            width: auto;
            margin: 0;
        }

        .forgot-link {
            color: #244f85;
            text-decoration: none;
            font-weight: bold;
            white-space: nowrap;
        }

        .forgot-link:hover {
            text-decoration: underline;
        }

        button[type="submit"] {
            width: 100%;
            padding: 13px;
            background: #244f85;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
            margin-top: 4px;
        }

        button[type="submit"]:hover {
            background: #17395f;
        }

        button[type="submit"]:disabled {
            background: #7a9bc2;
            cursor: not-allowed;
        }

        .register {
            text-align: center;
            margin-top: 22px;
            font-size: 14px;
        }

        .register a {
            color: #244f85;
            text-decoration: none;
            font-weight: bold;
        }

        .register a:hover {
            text-decoration: underline;
        }

        /* Messages */
        .message {
            padding: 12px;
            border-radius: 4px;
            font-size: 14px;
            margin-bottom: 16px;
            display: none;
            line-height: 1.45;
        }

        .message.error {
            display: block;
            background: #fdecea;
            color: #b71c1c;
            border: 1px solid #f5c6cb;
        }

        .message.success {
            display: block;
            background: #e8f5e9;
            color: #1b5e20;
            border: 1px solid #c8e6c9;
        }

        .message.info {
            display: block;
            background: #e3f2fd;
            color: #0d47a1;
            border: 1px solid #bbdefb;
        }

        /* Reset-password panel */
        .reset-panel {
            display: none;
            border-top: 1px solid #eee;
            margin-top: 24px;
            padding-top: 20px;
        }

        .reset-panel.open {
            display: block;
        }

        .reset-panel h3 {
            margin: 0 0 4px;
            color: #244f85;
            font-size: 17px;
        }

        .reset-panel p {
            margin: 0 0 14px;
            font-size: 13px;
            color: #777;
            line-height: 1.45;
        }

        .reset-actions {
            display: flex;
            gap: 10px;
            margin-top: 12px;
        }

        .reset-actions button {
            flex: 1;
            padding: 11px;
            border-radius: 4px;
            font-size: 14px;
            font-weight: bold;
            cursor: pointer;
            border: 1px solid #ccc;
            background: white;
            color: #333;
        }

        .reset-actions button.send {
            background: #244f85;
            color: white;
            border-color: #244f85;
        }

        .reset-actions button.send:hover {
            background: #17395f;
        }

        .reset-actions button.send:disabled {
            background: #7a9bc2;
            border-color: #7a9bc2;
            cursor: not-allowed;
        }

        .reset-actions button.cancel:hover {
            background: #f0f0f0;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 18px;
            color: #666;
            font-size: 13px;
        }

        /* Mobile */
        @media (max-width: 480px) {
            header {
                flex-direction: column;
                align-items: flex-start;
                padding: 15px 18px;
            }

            .login-card {
                padding: 24px 20px;
            }

            .reset-actions {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>

    <!-- Header -->
    <header>
        <div>
            <h2>RNBPCHS Alumni Portal</h2>
            <p>Reconnect. Remember. Reunite.</p>
        </div>
        <a href="register.html">New? Register Here</a>
    </header>

    <!-- Main -->
    <main>
        <div class="login-card">
            <h2>Welcome Back</h2>
            <p class="subtitle">Log in to your RNBPCHS Alumni account</p>

            <div id="formMessage" class="message"></div>

            <!-- Login Form -->
            <form id="loginForm" novalidate>
                <div class="field">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" placeholder="you@example.com" required autocomplete="email">
                </div>

                <div class="field">
                    <label for="password">Password</label>
                    <div class="password-wrap">
                        <input type="password" id="password" placeholder="Enter your password" required autocomplete="current-password">
                        <button type="button" class="toggle-password" data-target="password">Show</button>
                    </div>
                </div>

                <div class="row-between">
                    <label>
                        <input type="checkbox" id="rememberMe">
                        Remember me
                    </label>
                    <a href="#" class="forgot-link" id="forgotPasswordLink">Forgot password?</a>
                </div>

                <button type="submit" id="loginBtn">Log In</button>
            </form>

            <!-- Forgot Password Panel -->
            <div class="reset-panel" id="resetPanel">
                <h3>Reset your password</h3>
                <p>
                    Enter the email address you used to register. We'll send you a secure link from Firebase
                    to reset your password. Check your spam folder if you don't see it within a few minutes.
                </p>
                <div class="field">
                    <label for="resetEmail">Email Address</label>
                    <input type="email" id="resetEmail" placeholder="you@example.com" autocomplete="email">
                </div>
                <div class="reset-actions">
                    <button type="button" class="send" id="sendResetBtn">Send Reset Link</button>
                    <button type="button" class="cancel" id="cancelResetBtn">Cancel</button>
                </div>
            </div>

            <div class="register">
                Don't have an account?
                <a href="register.html">Register Here</a>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        RNBPCHS Alumni Portal<br>
        Made by Students – HS Batch 2026
    </footer>

    <!-- Firebase SDK (modular via CDN) -->
    <script type="module">
        // Import Firebase modules
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.2/firebase-app.js";
        import {
            getAuth,
            signInWithEmailAndPassword,
            sendPasswordResetEmail,
            setPersistence,
            browserLocalPersistence,
            browserSessionPersistence
        } from "https://www.gstatic.com/firebasejs/10.12.2/firebase-auth.js";

        // Firebase configuration
        const firebaseConfig = {
            apiKey: "AIzaSyAw-sqteTZyNoBIqHr-NTROz_BMmP6Yh7k",
            authDomain: "rnbpchs-alumni.firebaseapp.com",
            projectId: "rnbpchs-alumni",
            storageBucket: "rnbpchs-alumni.firebasestorage.app",
            messagingSenderId: "187797438854",
            appId: "1:187797438854:web:e6e564e04aea3129fa6c07"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const auth = getAuth(app);

        // ---- DOM references ----
        const loginForm = document.getElementById("loginForm");
        const loginBtn = document.getElementById("loginBtn");
        const emailInput = document.getElementById("email");
        const passwordInput = document.getElementById("password");
        const rememberMe = document.getElementById("rememberMe");
        const msgEl = document.getElementById("formMessage");

        const forgotLink = document.getElementById("forgotPasswordLink");
        const resetPanel = document.getElementById("resetPanel");
        const resetEmail = document.getElementById("resetEmail");
        const sendResetBtn = document.getElementById("sendResetBtn");
        const cancelResetBtn = document.getElementById("cancelResetBtn");

        // ---- Helpers ----
        function showMessage(text, type) {
            msgEl.textContent = text;
            msgEl.className = "message " + type;
            if (window.innerWidth < 600) {
                msgEl.scrollIntoView({ behavior: "smooth", block: "center" });
            }
        }

        function clearMessage() {
            msgEl.textContent = "";
            msgEl.className = "message";
        }

        function setLoading(button, isLoading, loadingText, defaultText) {
            button.disabled = isLoading;
            button.textContent = isLoading ? loadingText : defaultText;
        }

        // ---- Show/hide password ----
        document.querySelectorAll(".toggle-password").forEach(function (btn) {
            btn.addEventListener("click", function () {
                const targetId = this.getAttribute("data-target");
                const input = document.getElementById(targetId);
                if (input.type === "password") {
                    input.type = "text";
                    this.textContent = "Hide";
                } else {
                    input.type = "password";
                    this.textContent = "Show";
                }
            });
        });

        // ---- Restore remembered email ----
        const rememberedEmail = localStorage.getItem("rnbpchs_remember_email");
        if (rememberedEmail) {
            emailInput.value = rememberedEmail;
            rememberMe.checked = true;
        }

        // ---- Login form submission ----
        loginForm.addEventListener("submit", async function (event) {
            event.preventDefault();
            clearMessage();

            const email = emailInput.value.trim();
            const password = passwordInput.value;

            // Basic validation
            if (!email) {
                showMessage("Please enter your email address.", "error");
                return;
            }
            if (!/^\S+@\S+\.\S+$/.test(email)) {
                showMessage("Please enter a valid email address.", "error");
                return;
            }
            if (!password) {
                showMessage("Please enter your password.", "error");
                return;
            }

            setLoading(loginBtn, true, "Logging in...", "Log In");

            try {
                // Set persistence based on "Remember me"
                const persistence = rememberMe.checked
                    ? browserLocalPersistence
                    : browserSessionPersistence;

                await setPersistence(auth, persistence);

                // Sign in with Firebase Auth
                const userCredential = await signInWithEmailAndPassword(auth, email, password);
                const user = userCredential.user;

                // Save / clear remembered email
                if (rememberMe.checked) {
                    localStorage.setItem("rnbpchs_remember_email", email);
                } else {
                    localStorage.removeItem("rnbpchs_remember_email");
                }

                // Success message
                showMessage(
                    "Login successful! Welcome back, " + (user.displayName || email) + ". Redirecting...",
                    "success"
                );

                // Redirect to dashboard after a short delay
                setTimeout(function () {
                    window.location.href = "dashboard.html";
                }, 1200);

            } catch (error) {
                console.error("Login error:", error);
                let errorMsg = "Login failed. ";

                switch (error.code) {
                    case "auth/invalid-email":
                        errorMsg += "The email address is not valid.";
                        break;
                    case "auth/user-disabled":
                        errorMsg += "This account has been disabled. Please contact support.";
                        break;
                    case "auth/user-not-found":
                        errorMsg += "No account found with this email. Please register first.";
                        break;
                    case "auth/wrong-password":
                    case "auth/invalid-credential":
                        errorMsg += "Incorrect email or password. Please try again.";
                        break;
                    case "auth/too-many-requests":
                        errorMsg += "Too many failed attempts. Please try again later.";
                        break;
                    case "auth/network-request-failed":
                        errorMsg += "Network error. Please check your internet connection.";
                        break;
                    default:
                        errorMsg += error.message || "Please try again.";
                }

                showMessage(errorMsg, "error");
                setLoading(loginBtn, false, "Logging in...", "Log In");
            }
        });

        // ---- Forgot password: open panel ----
        forgotLink.addEventListener("click", function (event) {
            event.preventDefault();
            clearMessage();

            // Pre-fill reset email with the login email if present
            const currentEmail = emailInput.value.trim();
            resetEmail.value = currentEmail;

            resetPanel.classList.add("open");
            resetEmail.focus();
        });

        // ---- Forgot password: cancel ----
        cancelResetBtn.addEventListener("click", function () {
            resetPanel.classList.remove("open");
            clearMessage();
            emailInput.focus();
        });

        // ---- Forgot password: send reset link ----
        sendResetBtn.addEventListener("click", async function () {
            clearMessage();

            const email = resetEmail.value.trim();

            if (!email) {
                showMessage("Please enter the email address associated with your account.", "error");
                return;
            }
            if (!/^\S+@\S+\.\S+$/.test(email)) {
                showMessage("Please enter a valid email address.", "error");
                return;
            }

            setLoading(sendResetBtn, true, "Sending...", "Send Reset Link");

            try {
                await sendPasswordResetEmail(auth, email);

                showMessage(
                    "Password reset email sent to " + email + ". Please check your inbox (and spam folder). " +
                    "Follow the link to set a new password.",
                    "success"
                );

                setLoading(sendResetBtn, false, "Sending...", "Send Reset Link");

                // Optionally close the panel after a few seconds
                setTimeout(function () {
                    resetPanel.classList.remove("open");
                }, 4000);

            } catch (error) {
                console.error("Password reset error:", error);
                let errorMsg = "Could not send reset email. ";

                switch (error.code) {
                    case "auth/invalid-email":
                        errorMsg += "The email address is not valid.";
                        break;
                    case "auth/user-not-found":
                        // Firebase sometimes returns this for privacy; treat as success-like message
                        errorMsg = "If an account exists for " + email + ", a reset link has been sent. " +
                                   "Please check your inbox.";
                        showMessage(errorMsg, "info");
                        setLoading(sendResetBtn, false, "Sending...", "Send Reset Link");
                        return;
                    case "auth/too-many-requests":
                        errorMsg += "Too many requests. Please wait a while and try again.";
                        break;
                    case "auth/network-request-failed":
                        errorMsg += "Network error. Please check your internet connection.";
                        break;
                    default:
                        errorMsg += error.message || "Please try again.";
                }

                showMessage(errorMsg, "error");
                setLoading(sendResetBtn, false, "Sending...", "Send Reset Link");
            }
        });

        // Enter key on reset email triggers send
        resetEmail.addEventListener("keydown", function (event) {
            if (event.key === "Enter") {
                event.preventDefault();
                sendResetBtn.click();
            }
        });
    </script>

</body>
</html>
