// authHandlers.js
import { keycloak, initKeycloak } from './keycloackConfig';// Configuração dos handlers de autenticação do Keycloak
export function setupAuthHandlers() {
  keycloak.onReady = () => console.log('😃 pronto');
  keycloak.onAuthSuccess = () => console.log('Autenticação com sucesso');
  keycloak.onAuthError = (error) => console.log('Erro de autenticação:', error);
  keycloak.onTokenExpired = handleTokenExpiration;

  keycloak.onAuthRefreshSuccess = () => console.log('Token atualizado com sucesso');
  keycloak.onAuthLogout = () => {console.log('Deslogado com sucesso');}
}

function handleTokenExpiration() {
  console.log('🔄 token expirou');
  keycloak.updateToken(5)
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
      console.log('😖 Erro ao atualizar o token ou sessão expirou', e)
    )
    .finally(() => console.log('⚠️ finally updateToken'));
}
