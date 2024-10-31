import { keycloak } from './keycloackConfig';
import Cookies from 'js-cookie';

export function isLogged(){
    
    if(!keycloak.authenticated || !Cookies.get('CID') ){
        window.location.assign('/login');
    }
}