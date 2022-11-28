class App {
    constructor(ui) {
        this.ui = ui;

        this.toggleNavbar = this.toggleNavbar.bind(this);
        this.stringToDate = this.stringToDate.bind(this);
        this.getRemainigTime = this.getRemainigTime.bind(this);
    }


    isMobile() {

    }

    toggleNavbar(e) {
        console.log(e);
        //e.preventDefault();
        //this.ui.menuUl.style.display = 'block';
        this.ui.navbarMenu.dataset.expanded === 'false' ? this.ui.navbarMenu.dataset.expanded = 'true' : this.ui.navbarMenu.dataset.expanded = 'false';
        if (this.ui.navbarMenu.dataset.expanded === 'true') {
            this.ui.menuUl.style.left = '0';
        } else {
            this.ui.menuUl.style.left = "-300px";
        }

    }

    run() {

        this.loadListeners();
        this.setShopCountdown();

    }

    loadListeners() {

        this.ui.menuToggler.addEventListener('click', this.toggleNavbar);
    }

    setShopCountdown() {
        requestAnimationFrame(this.getRemainigTime);
    }
    stringToDate(dateString) {
        const [day,month,year] = dateString.split('/');
        return new Date([month,day,year].join('-'));
    }

    formatCountdownDisplay(value) {
        if(value < 100) {
            return ('0' + Math.floor(value)).slice(-2);
        } else {
            return (Math.floor(value));
        }
        
        
    }
    getRemainigTime() {
        
        let endtime = this.stringToDate(this.ui.shopCountdownEndTime.value);
        const total = Date.parse(endtime) - Date.parse(new Date());
        const seconds = this.formatCountdownDisplay((total / 1000) % 60);
        const minutes = this.formatCountdownDisplay((total / 1000 / 60) % 60);
        const hours = this.formatCountdownDisplay((total / (1000 * 60 * 60)) % 24);
        const days = this.formatCountdownDisplay(total / (1000 * 60 * 60 * 24));

        this.ui.Countdown.innerHTML = `${days} J ${hours} H ${minutes} M ${seconds} S`;

        if(total >= 1000) {
           requestAnimationFrame(this.getRemainigTime);
        }
        
    
    }



}

export default App;