// variables
var campaign_attribution_utm_source = "Not Provided";
var campaign_attribution_utm_medium = "Not Provided";
var campaign_attribution_utm_campn_name = "Not Provided"; 
var campaign_attribution_utm_content = "Not Provided";
var campaign_attribution_utm_term = "Not Provided";

var attribution_found = false;

/**
* Get Parameter from URL
*/
function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)","i"),
    results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

/**
*Get host name*
*/
function get_hostname(url) {
    var m = url.match(/^(http|https):\/\/[^/]+/);
    return m ? m[0] : null;
}

/**
* Get Main Domain
*/
function getMainDomain() {
   var i=0,currentdomain=document.domain,p=currentdomain.split('.'),s='_gd'+(new Date()).getTime();
   while(i<(p.length-1) && document.cookie.indexOf(s+'='+s)==-1){
	  currentdomain = p.slice(-1-(++i)).join('.');
	  document.cookie = s+"="+s+";domain="+currentdomain+";";
   }
   document.cookie = s+"=;expires=Thu, 01 Jan 1970 00:00:01 GMT;domain="+currentdomain+";";
   return currentdomain;
}
	
/**
* Set attribution cookie
*/
function setAttributionCookie(cookie_name,cookie_value){
		document.cookie = cookie_name + "=" + decodeURIComponent(cookie_value)+";path=/;domain="+getMainDomain()+";"
}

/**
* Get Attribution cookie stored value
*/
function getAttributionCookie(cookie_name) {
	var name = cookie_name + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i<ca.length; i++) {
			var c = ca[i];
			while (c.charAt(0)==' ') c = c.substring(1);
			if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
	}
	return "";
}

//List of Search Engines
var searchengines = {"www.Google":"Google","Bing":"Bing"};

//List of social sites
var socialsites = {"twitter.com": "Twitter","t.co":"Twitter","linkedin.com":"LinkedIn","facebook.com":"Facebook"};

//Get url hostname
var referralhost = '';
var internalreferral = false;
var foundinsearchengine = false;
var foundinsocialsites = false;
var foundreferrer = false;
//get URL parameters
var utm_source = getParameterByName('utm_source');
var utm_medium = getParameterByName('utm_medium');
var utm_campn_name = getParameterByName('utm_campaign');
var utm_content = getParameterByName('utm_content');
var utm_term = getParameterByName('utm_term');

//check if we have utm parameters in URL
if(utm_source || utm_medium || utm_campn_name || utm_content || utm_term){
	if(utm_source){
		campaign_attribution_utm_source = utm_source;
	}
	if(utm_medium){
		campaign_attribution_utm_medium = utm_medium;
	}
	if(utm_campn_name){
		campaign_attribution_utm_campn_name = utm_campn_name;
	}
	if(utm_content){
		campaign_attribution_utm_content = utm_content;
	}
	if(utm_term){
		campaign_attribution_utm_term = utm_term;
	}	
}else{
	var document_referrer = document.referrer;
	var host_name = get_hostname(document.location.href);
	
	//Get host name from referrer	
	referralhost = get_hostname(document_referrer);	

	if(referralhost){			
		//Check if it is from search engine
		for (var key in searchengines) {
			if (referralhost.toLowerCase().indexOf(key.toLowerCase()) >= 0){
				campaign_attribution_utm_medium = 'Organic';
				campaign_attribution_utm_source = searchengines[key];
				foundinsearchengine = true;
				attribution_found = true;
				break;
			}
		}
		//if not found in searchengines
		if(!foundinsearchengine){
			//Check in Social sites
			referralhost = referralhost.replace(/.*?:\/\//g, "");
			referralhost = referralhost.replace('www.', '');
			for (var key in socialsites) {
				if (referralhost.toLowerCase() == key.toLowerCase()){
					campaign_attribution_utm_medium = 'Organic';
					campaign_attribution_utm_source = socialsites[key];
					foundinsocialsites = true;
					attribution_found = true;
					break;
				}
			}					
		}
		//check referrer
		if((!foundinsearchengine) && (!foundinsocialsites) && (document_referrer.indexOf(host_name) < 0)) { 
				campaign_attribution_utm_source = document_referrer;
				campaign_attribution_utm_medium =  "Web Referral";
				attribution_found = true;
				foundreferrer = true;
		}
	}
	if(!foundinsearchengine && !foundinsocialsites && !foundreferrer) {
			campaign_attribution_utm_source = "Diamanti.com";
			campaign_attribution_utm_medium =  "Web Direct";
			attribution_found = true;
	}
}

/*Set attribution cookie*/
if(campaign_attribution_utm_source || campaign_attribution_utm_medium || campaign_attribution_utm_campn_name || campaign_attribution_utm_content || campaign_attribution_utm_term) {
	if(!getAttributionCookie('utm_campaign')) {
		setAttributionCookie('utm_campaign',campaign_attribution_utm_campn_name) //Set Cookie
	}
	if(!getAttributionCookie('utm_source')) {
		setAttributionCookie('utm_source',campaign_attribution_utm_source) //Set Cookie
	}
	if(!getAttributionCookie('utm_medium')) {
		setAttributionCookie('utm_medium',campaign_attribution_utm_medium) //Set Cookie
	}
	if(!getAttributionCookie('utm_content')) {
		setAttributionCookie('utm_content',campaign_attribution_utm_content) //Set Cookie
	}
	if(!getAttributionCookie('utm_term')) {
		setAttributionCookie('utm_term',campaign_attribution_utm_term) //Set Cookie
	}
	
}

if(typeof(MktoForms2) != 'undefined') { //If Marketo Form exists on landing page.
	MktoForms2.whenReady(function (form) {	 
		utm_campaign = getAttributionCookie('utm_campaign');
		utm_source = getAttributionCookie('utm_source');
		utm_medium = getAttributionCookie('utm_medium');
		utm_content = getAttributionCookie('utm_content');
		utm_term = getAttributionCookie('utm_term');
		
		if(utm_campaign || utm_source || utm_medium || utm_term || utm_content){
			if(utm_campaign) {
				form.addHiddenFields({'UTM_Campaign_Most_Recent__c' : utm_campaign });
			}else{
				form.addHiddenFields({'UTM_Campaign_Most_Recent__c' : 'Not Provided' });
			}
			if(utm_source){
				form.addHiddenFields({'UTM_Source_Most_Recent__c' : utm_source });
			}else{
				form.addHiddenFields({'UTM_Source_Most_Recent__c' : 'Not Provided' });
			} 
			if(utm_medium){				
				form.addHiddenFields({'UTM_Medium_Most_Recent__c' : utm_medium });
			}else{
				form.addHiddenFields({'UTM_Medium_Most_Recent__c' : 'Not Provided' });
			}			
			form.addHiddenFields({'UTM_Content_Most_Recent__c' : utm_content });
			form.addHiddenFields({'UTM_Term_Most_Recent__c' : utm_term });
		}
	});		
}
