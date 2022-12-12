class CountdownElement extends HTMLElement
{
    constructor() {
        super();
        // Create a shadow root
        this.attachShadow({ mode: "open" }); // sets and returns 'this.shadowRoot'

        console.log(this);
    }

    connectedCallback() {
        console.log('connected');
    }

    disconnectedCallback () {
        console.log('disconnected');
    }

    attributeChangedCallback () {
        
    }
}



export default CountdownElement;