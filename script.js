let langs = document.querySelector(".langs"),
    link = document.querySelectorAll("a"),
    title = document.querySelector(".title"),
    description = document.querySelector(".description"),
    q1 = document.querySelector(".q1"),
    q2 = document.querySelector(".q2"),
    q3 = document.querySelector(".q3"),
    q4 = document.querySelector(".q4"),
    q5 = document.querySelector(".q5"),
    q6 = document.querySelector(".q6"),
    q7 = document.querySelector(".q7"),
    q8 = document.querySelector(".q8"),
    q9 = document.querySelector(".q9"),
    nav1 = document.querySelector(".nav1"),
    nav2 = document.querySelector(".nav2"),
    nav3 = document.querySelector(".nav3"),
    nav4 = document.querySelector(".nav4"),
    nav5 = document.querySelector(".nav5"),
    h11 = document.querySelector(".h11"),
    h22 = document.querySelector(".h22"),
    h85 = document.querySelector(".h85"),
    h44 = document.querySelector(".h44"),
    h55 = document.querySelector(".h55"),
    h66 = document.querySelector(".h66"),
    h77 = document.querySelector(".h77"),
    h88 = document.querySelector(".h88"),
    h99 = document.querySelector(".h99"),
    h10 = document.querySelector(".h10"),
    Title = document.querySelector(".Title"),
    subtitle = document.querySelector(".subtitle"),
    world = document.querySelector(".world"),
    dataa = document.querySelector(".dataa"),
    bouton = document.querySelector(".bouton"),
    namee = document.querySelector(".namee"),
    send = document.querySelector(".send");

// Fonction pour définir les textes selon la langue choisie
function setLanguage(language) {
    title.textContent = data[language].title;
    description.textContent = data[language].description;
    q1.textContent = data[language].q1;
    q2.textContent = data[language].q2;
    q3.textContent = data[language].q3;
    q4.textContent = data[language].q4;
    q5.textContent = data[language].q5;
    q6.textContent = data[language].q6;
    q7.textContent = data[language].q7;
    q8.textContent = data[language].q8;
    q9.textContent = data[language].q9;
    nav1.textContent = data[language].nav1;
    nav2.textContent = data[language].nav2;
    nav3.textContent = data[language].nav3;
    nav4.textContent = data[language].nav4;
    nav5.textContent = data[language].nav5;
    h11.textContent = data[language].h11;
    h22.textContent = data[language].h22;
    h85.textContent = data[language].h85;
    h44.textContent = data[language].h44;
    h55.textContent = data[language].h55;
    h66.textContent = data[language].h66;
    h77.textContent = data[language].h77;
    h88.textContent = data[language].h88;
    h99.textContent = data[language].h99;
    h10.textContent = data[language].h10;
    Title.textContent = data[language].Title;
    subtitle.textContent = data[language].subtitle;
    world.textContent = data[language].world;
    bouton.textContent = data[language].bouton;
    namee.textContent = data[language].namee;
    send.textContent = data[language].send;
    dataa.textContent = data[language].dataa;

}


// Fonction pour définir les textes selon la langue choisie
function setLanguage(language) {
    title.textContent = data[language].title;
    description.textContent = data[language].description;
    q1.textContent = data[language].q1;
    q2.textContent = data[language].q2;
    q3.textContent = data[language].q3;
    q4.textContent = data[language].q4;
    q5.textContent = data[language].q5;
    q6.textContent = data[language].q6;
    q7.textContent = data[language].q7;
    q8.textContent = data[language].q8;
    q9.textContent = data[language].q9;
    nav1.textContent = data[language].nav1;
    nav2.textContent = data[language].nav2;
    nav3.textContent = data[language].nav3;
    nav4.textContent = data[language].nav4;
    nav5.textContent = data[language].nav5;
    h11.textContent = data[language].h11;
    h22.textContent = data[language].h22;
    h85.textContent = data[language].h85;
    h44.textContent = data[language].h44;
    h55.textContent = data[language].h55;
    h66.textContent = data[language].h66;
    h77.textContent = data[language].h77;
    h88.textContent = data[language].h88;
    h99.textContent = data[language].h99;
    h10.textContent = data[language].h10;
    Title.textContent = data[language].Title;
    subtitle.textContent = data[language].subtitle;
    world.textContent = data[language].world;
    dataa.textContent = data[language].dataa;
    bouton.textContent = data[language].bouton;
    descr.textContent = data[language].descr;
    namee.textContent = data[language].name;
    send.textContent = data[language].send;
}

// Définir l'anglais comme langue par défaut au chargement de la page
document.addEventListener("DOMContentLoaded", () => {
    setLanguage('english');
});

link.forEach(el => {
    el.addEventListener("click", () => {
        langs.querySelector(".active").classList.remove("active");
        el.classList.add("active");

        let attr = el.getAttribute("language");
        setLanguage(attr);
    });
});

let data = {
    english: {
        title: "Green Cycle",
        description: "Explore",
        q1: "Why choose Green Cycle?",
        q2: "QUALITY GARANTEE",
        q3:"Each bike is reconditioned and certified in our workshop.",
        q4:"FRAMED PRICE",
        q5:"Each sale price is adjusted to the CoteVélo raw rating.",
        q6:"INFORMED ADVICE",
        q7:"Each customer receives personalized follow-up.",
        q8:"VERIFIED PROPERTY",
        q9:"All bikes are subject to ownership verification.",
        nav1:"Home",
        nav2:"About Us ",
        nav3:"Bikes",
        nav4:"Walks",
        nav5:"Contact Us",
        h11:"Sign in",
        h22:"or use your account",
        h85:"Forgot your password?",
        h44:"Welcome Back!",
        h55:"To keep connected with us please login with your personal info",
        h66:"Hello, Friend!",
        h77:"Enter your personal details and start journey with us",
        h88:"Create Account",
        h99:"or use your email for registration",
        h10:"Sign Up",
        Title: "Our Best Sellers ",
        subtitle:"Discover Our New Products !",
        Title:"Our Best Sellers",
        subtitle:"Discover Our New Products !",
        world:">Explore The World !",
        dataa:"With our tours, you are sure to have an unforgettable visit to Tunisia, at an affordable price.",
        bouton:"Our Tours",
        descr:"Contact Us",
        namee:"Name",
        send:"send message"
      },
    francais: {
        title: "Green Cycle",
        description: "Explorer",
        q1: "Pourquoi Choisir Green Cycle?",
        q2:"QUALITE GARANTIE",
        q3:"Chaque vélo est reconditionné et certifié dans nos ateliers.",
        q4:"PRIX ENCADRÉ",
        q5:"Chaque prix de vente est ajusté sur la cote brute de CoteVélo.",
        q6:"CONSEILS AVISÉS",
        q7:"Chaque client fait l'objet d'un suivi personnalisé.",
        q8:"PROPRIÉTÉ VÉRIFIÉE",
        q9:"Tous les vélos font l'objet d'une vérification de propriété.",
        nav1:"Home",
        nav2:"A propos de nous",
        nav3:"Vélos",
        nav4:" Balades",
        nav5:"Contactez-nous",
        h11:"S'identifier",
        h22:"ou utilisez votre compte",
        h85:"Mot de passe oublié?",
        h44:"Content de te revoir!",
        h55:"Pour rester en contact avec nous, connectez-vous avec vos informations personnelles",
        h66:"Bonjour mon ami!" ,
        h77:"Entrez vos informations personnelles et commencez votre voyage avec nous",
        h88:"Créer un compte",
        h99:"ou utilisez votre email pour vous inscrire",
        h10:"S'inscrire",
        Title: "Nos meilleures ventes",
        subtitle:"Découvrez nos nouveaux produits !",
        Title:"Nos meilleures ventes",
        subtitle:"Découvrez nos nouveaux produits !",
        world:"Explorez le monde !",
        dataa:"Avec nos circuits, vous êtes assuré de vivre une visite inoubliable en Tunisie, à un prix abordable.",
        bouton:"Nos circuits",
        descr:"Contactez-nous",
        namee:"Nom",
        send:"envoyer message"
      }    
}



/*sign up - sign in */
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});


/*cards*/
document.addEventListener('DOMContentLoaded', () => {
  const sliderContent = document.querySelector('.slider__content');
  sliderContent.scrollLeft = 0; // Start at the leftmost position

  const prevButton = document.querySelector('.arrow-btn.prev');
  const nextButton = document.querySelector('.arrow-btn.next');

  if (prevButton && nextButton && sliderContent) {
      prevButton.addEventListener('click', () => {
          sliderContent.scrollBy({
              left: -200,
              behavior: 'smooth'
          });
      });

      nextButton.addEventListener('click', () => {
          sliderContent.scrollBy({
              left: 200,
              behavior: 'smooth'
          });
      });
  }
});
const menuBtn = document.getElementById('menuBtn');
const navMenu = document.getElementById('navMenu');
const closeBtn = document.getElementById('closeBtn');

menuBtn.addEventListener('click', () => {
  navMenu.classList.add('show'); // Show menu
  closeBtn.style.display = 'block'; // Show the close button
});

closeBtn.addEventListener('click', () => {
  navMenu.classList.remove('show'); // Hide menu
  closeBtn.style.display = 'none'; // Hide the close button
});
 