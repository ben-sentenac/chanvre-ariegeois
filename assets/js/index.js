import App from './App';
import { UI } from './UI';
import '../scss/app.scss';
import CountdownElement from './custom-elements/countdown-element'; 




const app = new App(UI);

app.run();

customElements.define('countdown-element',CountdownElement,{});