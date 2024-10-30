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
        keycloak.loadUserInfo().then(function (userInfo) {
          console.log(
            '%c🔍 user userInfo',
            'font-size: 2em;color:#fff;background-color:#005eb8',
            userInfo
          );
        });
        keycloak.loadUserProfile().then(function (profile) {
          console.log(
            '%c🔍 user profile',
            'font-size: 2em;color:#fff;background-color:#005eb8',
            profile
          );
        });
      }
  
      if (keycloak.tokenParsed) {
        console.log(
          '%c🔍 token',
          'font-size: 2em;color:#fff;background-color:#005eb8',
          keycloak.tokenParsed
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
  
  // redirecionar para o login
  function loginLogoutAmei() {
    if (auth) {
      window.keycloak.logout();
      return;
    }
  
    window.keycloak.login();
  }
  