const links = document.querySelector('.logs__logpage');




class GetAllLogs {	
	constructor(links) {
		this.links = links;
	}


	writeCoockie() {    
    let clickLinkDay = 'clickLinkDay';
    let elem = this.links.children;    
    
    for(let i = 0; i < elem.length; i++) {      
      elem[i].addEventListener('click', (e) => {
        console.log(e.target.text);
        document.cookie = encodeURIComponent(clickLinkDay) + '=' + encodeURIComponent(e.target.text);
      });
    }        
  }
  

}


let result = new GetAllLogs(links);
result.writeCoockie();
