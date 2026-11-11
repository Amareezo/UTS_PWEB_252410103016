
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Access Portal - Character Vault</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="login-page">

    <main class="registry-container">

        <header class="registry-header">
            <h1>CV. / REGISTRY</h1>
            <span>ACCESS PORTAL</span>
        </header>

        <section class="registry-content">

            <div class="registry-intro">
                <span class="registry-number">01</span>

                <h2>The Archive</h2>

                <p>
                    A curated collection of fictional identities,
                    stories, and worlds.
                </p>

                <div class="registry-info">
                    <span>PERSONAL DATABASE</span>
                    <span>EST. 2026</span>
                </div>
            </div>

            <div class="registry-login">

                <span class="access-label">RESTRICTED ACCESS</span>

                <h2>Identify yourself.</h2>

                <form action="{{ route('dashboard') }}" method="GET">

                    <div class="form-group">
                        <label for="username">USERNAME</label>

                        <input
                            type="text"
                            id="username"
                            name="username"
                            placeholder="Your username..."
                            required
                        >
                    </div>

                    <button type="submit">
                        ACCESS ARCHIVE →
                    </button>

                </form>

            </div>

        </section>

        <footer class="registry-footer">
            <span>CHARACTER VAULT</span>
            <span>REGISTRY NO. 001</span>
        </footer>

    </main>

</body>
</html>
