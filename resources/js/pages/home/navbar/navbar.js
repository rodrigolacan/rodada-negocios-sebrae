// outroArquivo.js
import { initializeBaseAccountProfile } from '../../../keycloack/baseAccountProfile'; // Ajuste o caminho conforme necessário
import { isLogged } from '../../../keycloack/isLogged';
initializeBaseAccountProfile();

isLogged.isLogged();