<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <script src="https://amei.homolog.kubernetes.sebrae.com.br/auth/js/keycloak.js"></script>
    <script src="https://base-estatico.sebrae.com.br/web-components/base-web-components-latest.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--vite('resources/js/keycloack/keycloak.main.js')-->
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 flex items-center justify-center h-screen">
 LOGANDO PELO AMEI
</body>
<script>
// Instanciar Keycloak
var keycloak = new Keycloak({
    url: 'https://amei.homolog.kubernetes.sebrae.com.br/auth',
    realm: 'externo',
    clientId: 'app-frontend',
});

var auth = false;

// Iniciar o Keycloak assim que a página for carregada
keycloak.init({
    enableLogging: true,
    onLoad: 'check-sso',
    silentCheckSsoRedirectUri: window.location.origin + '/silent-check-sso.html',
}).then(function (authenticated) {
    auth = authenticated;

    if (auth) {
        // Carregar informações do usuário e redirecionar
        keycloak.loadUserInfo().then(function (userInfo) {
            console.log(
                '%c🔍 user userInfo',
                'font-size: 2em;color:#fff;background-color:#005eb8',
                userInfo,
            );
        });
        keycloak.loadUserProfile().then(function (profile) {
            console.log(
                '%c🔍 user profile',
                'font-size: 2em;color:#fff;background-color:#005eb8',
                profile,
            );
        });
        window.location.assign('/auth/amei/token/' + keycloak.token);
    } else {
        // Se não autenticado, redireciona para login
        keycloak.login();
    }

    if (keycloak.tokenParsed) {
        console.log(
            '%c🔍 token',
            'font-size: 2em;color:#fff;background-color:#005eb8',
            keycloak.tokenParsed,
        );
    }
}).catch(function (e) {
    console.log(e);
    if (e?.error === 'login_required') {
        return keycloak.login();
    }
    alert('🤯 Erro ao inicializar');
});

function handler() {
    if (!keycloak) {
        return;
    }
    console.log('🔏 isAuthenticated', keycloak.authenticated ?? false);
    console.log('🔏 token', keycloak.token ?? '');
    console.log('🔏 tokenInfo', keycloak.tokenParsed ?? {});
}

keycloak.onReady = () => {
    console.log('😃 pronto');
    handler();
};

keycloak.onAuthSuccess = () => {
    console.log('😃 autenticado com sucesso');
    handler();
};

keycloak.onAuthRefreshSuccess = () => {
    console.log('😃 atualização da autenticação com sucesso');
    handler();
};

keycloak.onAuthError = (error) => {
    console.log('😖 autenticação falhou', error);
    handler();
};

keycloak.onAuthRefreshError = () => {
    console.log('😖 atualização da autenticação falhou');
    handler();
};

keycloak.onAuthLogout = () => {
    console.log('👋 fez o logout');
    handler();
};

keycloak.onTokenExpired = () => {
    console.log('🔄 token expirou');
    keycloak.updateToken(5).then((refreshed) => {
        if (refreshed) {
            console.log('😃 token foi atualizado');
            console.log(
                '%c🔍 refreshed token',
                'font-size: 2em;color:#fff;background-color:#005eb8',
                keycloak.tokenParsed,
            );
        } else {
            console.log('😃 token continua válido');
        }
    }).catch((e) => console.log('😖 deu ruim ao atualizar o token ou a sessão expirou', e))
    .finally(() => console.log('⚠️ finally updateToken'));
};

// Conectar com o BaSeAccountProfile
var BaSeAccountProfile = document.querySelector('#BaSeAccountProfile');
BaSeAccountProfile.keycloak = keycloak;

// Redirecionar para o login
function loginAmei() {
    if (auth) {
        window.keycloak.logout();
        return;
    }
    window.keycloak.login();
}

// Redirecionar para o cadastro
function cadastroAmei() {
    if (!auth) {
        window.keycloak.login({ action: 'register' });
        return;
    }
    alert('👍 Usuário já está logado');
}
</script>

</html>
