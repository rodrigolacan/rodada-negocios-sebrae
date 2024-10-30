// auth.js

var keycloak = new Keycloak({
  url: 'https://amei.homolog.kubernetes.sebrae.com.br/auth',
  realm: 'externo',
  clientId: 'app-frontend',
});

var auth = false;

keycloak
  .init({
    enableLogging: true,
    onLoad: 'check-sso',
    silentCheckSsoRedirectUri: window.location.origin + '/silent-check-sso.html',
  })
  .then(function (authenticated) {
    auth = authenticated;

    if (auth) {
      keycloak.loadUserInfo().then(function (userInfo) {});
      keycloak.loadUserProfile().then(function (profile) {});
      window.location.href = window.location.origin + '/home?token=' + keycloak.token;
    }

    if (keycloak.tokenParsed) {
      console.log(
        'token',
        keycloak.token
      );
    }
  })
  .catch(function (e) {
    console.log(e);
    if (e?.error === 'login_required') {
      return keycloak.login();
    }
    alert('🤯 Erro ao inicializar');
  });

keycloak.onReady = () => {
  console.log('😃 pronto');

  // Define a função loginLogoutAmei após a inicialização do Keycloak
  window.loginAmei = function () {
    if (auth) {
      keycloak.logout();
      return;
    }
    keycloak.login();
  };
};

keycloak.onAuthSuccess = () => {};

keycloak.onAuthRefreshSuccess = () => {};

keycloak.onAuthError = (error) => {
  console.log('autenticação error', error);
  handler();
};

keycloak.onAuthRefreshError = () => {};

keycloak.onAuthLogout = () => {
  console.log('👋 Realizou o logout');
};

keycloak.onTokenExpired = () => {
  console.log('🔄 token expirou');
  keycloak
    .updateToken(5)
    .then((refreshed) => {
      if (refreshed) {
        console.log('😃 token foi atualizado');
        console.log(
          '%c🔍 refreshed token',
          'font-size: 2em;color:#fff;background-color:#005eb8',
          keycloak.tokenParsed
        );
      } else {
        console.log('😃 token continua válido');
      }
    })
    .catch((e) =>
      console.log('😖 deu ruim ao atualizar o token ou a sessão expirou', e)
    )
    .finally(() => console.log('⚠️ finally updateToken'));
};

function handler() {
  console.log('🔏 isAuthenticated', keycloak.authenticated ?? false);
  console.log('🔏 token', keycloak.token ?? '');
  console.log('🔏 tokenInfo', keycloak.tokenParsed ?? {});
}
