// auth.js
/*window.keycloak = new Keycloak({
  url: 'https://amei.homolog.kubernetes.sebrae.com.br/auth',
  realm: 'externo',
  clientId: 'app-frontend',
});

var auth = false;
var userProfile;
keycloak
  .init({
    enableLogging: true,
    onLoad: 'check-sso',
    silentCheckSsoRedirectUri: window.location.origin + '/silent-check-sso.html',
  })
  .then(function (authenticated) {
    auth = authenticated;

    if (auth) {
      keycloak.loadUserInfo().then(function (userInfo) {      });
      keycloak.loadUserProfile().then(function (profile) {});
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

  window.loginAmei = function () {
    if (auth) {
      window.location.assign('/auth/amei/token/'+keycloak.token);
      return;
    }
    window.keycloak.login();
  }
};

keycloak.onAuthSuccess = () => {};
keycloak.onAuthRefreshSuccess = () => {};
keycloak.onAuthError = (error) => {
  console.log('autenticação error', error);
  handler();
};
keycloak.onAuthRefreshError = () => {};
keycloak.onAuthLogout = () => {};
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

var BaSeAccountProfile = document.querySelector('#BaSeAccountProfile');
BaSeAccountProfile.keycloak = keycloak;

function handler() {
  console.log('🔏 isAuthenticated', keycloak.authenticated ?? false);
  console.log('🔏 token', keycloak.token ?? '');
  console.log('🔏 tokenInfo', keycloak.tokenParsed ?? {});
}*/
// keycloak.main.js
import { keycloak, initKeycloak } from './keycloackConfig';
import { setupAuthHandlers } from './authHandlers';
import { loginAmei, handler } from './utils';
import { initializeBaseAccountProfile } from './baseAccountProfile';

let auth = false;

initKeycloak()
  .then((authenticated) => {
    auth = authenticated;
    if (auth) {
      keycloak.loadUserInfo();
      keycloak.loadUserProfile();
    }
    window.location.assign('/public')
  })
  .catch((e) => {
    console.log(e);
    if (e?.error === 'login_required') {
      return keycloak.login();
    }
    alert('🤯 Erro ao inicializar');
  });


setupAuthHandlers();
window.loginAmei = loginAmei;


initializeBaseAccountProfile();


