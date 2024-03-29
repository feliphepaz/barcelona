function homeScripts() {
  // Banners

  const banners = document.querySelectorAll('.banner');

  banners.forEach((banner) => {
    const bannerLink = banner.dataset.link;
    banner.style.background = `linear-gradient(180deg, rgba(0, 0, 0, 0) 44.27%, #000000 100%), url(${bannerLink}) no-repeat center`;
    banner.style.backgroundSize = 'cover';
  });

  function animaBannerOnOver(e) {
      banners[0].style.width = '60%';
      banners[0].style.transition = '0.5s';
      banners[1].style.width = '40%';
      if (e.currentTarget.id === '1') {
        banners[1].style.width = '60%';
        banners[1].style.transition = '0.5s';
        banners[0].style.width = '40%'
      }
  }

  function animaBannerOnOut() {
    banners[1].style.width = '50%';
    banners[0].style.width = '50%'
  }

  function verify() {
    if (window.innerWidth < 650) {
      banners.forEach((banner) => {
        banner.removeEventListener('mouseover', animaBannerOnOver);
        banner.removeEventListener('mouseout', animaBannerOnOut);
        banners[0].style.width = '100%';
        banners[1].style.width = '100%';
      })
    } else {
      banners.forEach((banner) => {
        banner.addEventListener('mouseover', animaBannerOnOver);
        banner.addEventListener('mouseout', animaBannerOnOut);
      })
    }
  }

  verify();

  window.addEventListener('resize', verify);

  
  // Data e countdown

  const numbers = document.querySelectorAll('.number');

  function countdown(day) {
    const matchDay = new Date(day)
    const actualDay = new Date();
    const futureDiff = matchDay.getTime() - actualDay.getTime();
    const getDays = Math.floor(futureDiff / (24 * 60 * 60 * 1000));
    const getHours = Math.floor(futureDiff / (60 * 60 * 1000));
    const getMinutes = Math.floor(futureDiff / (60 * 1000));
    const getSeconds = Math.floor(futureDiff / 1000);
    function total() {
      const days = getDays.toLocaleString('en-US', {
        minimumIntegerDigits: 2,
      });
      const hours = (getHours % 24).toLocaleString('en-US', {
        minimumIntegerDigits: 2,
      });
      const minutes = (getMinutes % 60).toLocaleString('en-US', {
        minimumIntegerDigits: 2,
      });
      const seconds = (getSeconds % 60).toLocaleString('en-US', {
        minimumIntegerDigits: 2,
      });
      return {
        days,
        hours,
        minutes,
        seconds
      }
    }
    
    numbers[0].innerText = total().days;
    numbers[1].innerText = total().hours;
    numbers[2].innerText = total().minutes;
    numbers[3].innerText = total().seconds;
  }

  const containerDay = document.querySelector('.match-day .day');
  const containerNumbers = document.querySelectorAll('.match-day .day p');
  const containerDate = document.querySelector('.match-data .date');
  const versus = document.querySelector('.versus');
  const rest = document.querySelector('.match-day .rest');
  const buy = document.querySelector('.match-day .cta');
  const data = versus.dataset.day;
  const horario = versus.dataset.time;

  function formatDate() {
    let extensiveDate = ''
    const months = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
    ];
    const cleanMonth = +data.split('/').join('').slice(2,4);
    extensiveDate = months[cleanMonth - 1];
    return `$1 ${extensiveDate} $3`
  }

  function formatDateInDom() {
    let monthPtBr = ''
    const monthsBr = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
    "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
    ];
    const cleanMonthBr = +data.split('/').join('').slice(2,4);
    monthPtBr = monthsBr[cleanMonthBr - 1];
    return `$1 de ${monthPtBr}`
  }

  const cleanDate = data.replace(/(\d{2})\/(\d{2})\/(\d{4})/g, formatDate());
  const dateInDom = data.replace(/(\d{2})\/(\d{2})\/(\d{4})/g, formatDateInDom());

  const completeDate = `${cleanDate} ${horario} GMT-0300`;

  const h2 = document.createElement('h2');
  h2.innerText = 'O jogo começou!';
  h2.classList.add('start-game');

  const restOfDays = setInterval(() => {
    numbers.forEach(number => {
      if(+number.innerText < 0) {
        matchInfo.gameStart(true)
        clearInterval(restOfDays);
      } else {
        matchInfo.gameStart(false)
        matchInfo.data()
      }
    })
  }, 1000);


  // Escudos

  const teamsSelector = document.querySelectorAll('.versus img');
  const adversary = versus.dataset.adversary;

  async function getTeam() {
    const response = await fetch('https://api.jsonbin.io/b/617805f89548541c29c8cdd4');
    const resolve = await response.json();
    resolve.forEach((r => {
      if (r.nome == adversary) {
        teamsSelector[1].src += `/img/escudos/${r.escudo}`;
      }
    }))
  }


  // Mandante

  const result = versus.dataset.out;

  function isOut(boo) {
    const casa = document.querySelector('.versus img:first-child');
    const fora = document.querySelector('.versus img:last-child');
    const x = document.querySelector('.versus span');

    if (boo === 'fora') {
      casa.style.order = '3';
      fora.style.order = '1';
    } else {
      casa.style.order = '1';
      fora.style.order = '3';
    }
  }


  // Acionamento das funções

  const matchInfo = {
    data() {
      countdown(completeDate);
      containerDate.innerText = dateInDom;
    },
    gameStart(start) {
      numbers.forEach(number => {
        if (start === true && +number.innerText < 0) {
          containerNumbers.forEach(container => {
            container.style.display = 'none';
            containerDay.appendChild(h2);
          })
        }
      })
    },
    nextAdversary() {
      getTeam()
    },
    mandant() {
      isOut(result);
    }
  }

  matchInfo.data();
  matchInfo.gameStart(true);
  matchInfo.nextAdversary();
  matchInfo.mandant();


  // Em breve

  const soon = document.querySelector('.soon');

  if (versus.dataset.soon === 'on') {
    rest.style.display = 'none';
    buy.style.display = 'none';
    containerNumbers.forEach((num) => {
      num.style.display = 'none';
    })
    soon.style.display = 'block';
  }


  // Videos

  const videos = document.querySelectorAll('.videos-content div iframe');

  async function fetchAPI() {
    const response = await fetch('https://www.googleapis.com/youtube/v3/search?key=AIzaSyArKlS3Db4ZgqHgmUHU6sx3khZ4oGN2A1A&channelId=UCzWBYu-vXwIy6Zd5Bs0K2Uw&part=snippet,id&order=date&maxResults=20');
    const resolve = await response.json();
    console.log(resolve);
    videos.forEach((video, index) => {
      videos[index].src += resolve.items[index].id.videoId;
    })
  }

  fetchAPI();


  // Form 

  const btns = document.querySelectorAll('.options-flex button');
  const modal = document.querySelectorAll('.modal');

  btns.forEach(btn => {
    btn.addEventListener('click', handleModal);
  })

  function handleModal(e) {
    e.preventDefault();
    const tgtId = e.target.id + '-mod';
    modal.forEach(mod => {
      if (tgtId === mod.id) {
        mod.classList.add('mod-act');
        btns.forEach(btn => {
          btn.classList.remove('active');
        })
        e.target.classList.add('active');
      } else {
        mod.classList.remove('mod-act');
      }
    })
  }
}



function noticesScripts() {
  // Noticias

  const notices = document.querySelectorAll('.blog-post a img');
  const post = document.querySelectorAll('.blog-post a');

  notices.forEach((notice, index) => {
    notice.style.display = 'none'
    let change = `linear-gradient(180deg, rgba(0, 0, 0, 0) 44.27%, #000000 100%), url(${notice.src}) no-repeat center`;
    post[index].style.background = change;
    post[index].style.backgroundSize = 'cover';
  })


  // Posts

  const body = document.getElementsByTagName('body')[0];
  const className = 'Notícias'
  if (!body.classList.contains(className)) {
    body.classList.add(className);
  }

  const posts = document.querySelectorAll('.nav-blog a');
  const navPost = document.querySelector('.nav-blog');

  if (posts.length) {
    createLine();
    posts.forEach(pst => {
      if (pst.innerText == '← POSTS ANTIGOS') {
        pst.innerText = '❯❯';
        pst.classList.add('next');
      }
      if (pst.innerText == 'POSTS NOVOS →') {
        pst.innerText = '❮❮';
        pst.classList.add('before');
      }
    })
  }

  function createLine() {
    const line = document.createElement('span');
    line.classList.add('nav-blog-line');
    navPost.appendChild(line);
    if (posts.length === 1) {
      line.style.margin = '0 10px 0 0';
    }
  }


  // Tags

  const sectionContainer = document.createElement('section');
  sectionContainer.classList.add('filtro');
  const divContainer = document.createElement('div');
  divContainer.classList.add('container');
  sectionContainer.appendChild(divContainer);
  const searchForm = document.querySelector('.searchform');
  divContainer.appendChild(searchForm);
  const noticias = document.querySelector('.Notícias');
  noticias.insertBefore(sectionContainer, noticias.children[3]);

  const filtroTags = document.querySelector('.filtro-tags');
  divContainer.appendChild(filtroTags);

  const tagsBtn = document.querySelectorAll('.filtro-tags ul li a');
  const tagName = document.querySelector('.title-notices .container h1');

  tagsBtn.forEach((btn) => {
    if (btn.innerText === tagName.innerText.toLowerCase()) {
      btn.classList.add('filtro-tag-selected');
    }
  })
}

function postScripts() {
  // Matéria

  const topPostBar = document.querySelector('.top-post-bar');
  const textBlog = document.querySelector('.text-blog');
  topPostBar.nextElementSibling.style.display = 'none';
  const postImg = document.createElement('div');
  postImg.classList.add('post-img');
  const postImgSrc = topPostBar.nextElementSibling.src;
  postImg.style.background = `url(${postImgSrc}) no-repeat center`;
  postImg.style.backgroundSize = 'cover';
  textBlog.insertBefore(postImg, textBlog.children[1]);


  // Posts Relacionados

  const relatedPosts = document.querySelectorAll('.related-posts .container a');
  const relatedPostsImg = document.querySelectorAll('.related-posts .container img');
  relatedPostsImg.forEach(img => {
    img.style.display = 'none';
  })
  relatedPosts.forEach((post,index) => {
    console.log(index);
    post.style.background = `linear-gradient(180deg, rgba(0, 0, 0, 0) 44.27%, #000000 100%), url(${relatedPostsImg[index].src}) no-repeat center`
    post.style.backgroundSize = 'cover';
  })
}

// Header

const btnMobile = document.querySelector('.menu-mobile-btn');
const menuMobile = document.querySelector('.menu-mobile');
const menuMobileBtns = document.querySelectorAll('.menu-mobile ul li a');
btnMobile.addEventListener('click', handleBtn);

function closeMenu() {
  btnMobile.children[0].src = btnMobile.children[0].src.replace('close', 'open');
  menuMobile.classList.remove('open-menu');
  menuMobile.classList.add('close-menu');
  setTimeout(() => {
    menuMobile.style.display = 'none'
  }, 400)
}

menuMobileBtns.forEach((btn) => {
  btn.addEventListener('click', closeMenu);
})

function handleBtn() {
  btnMobile.classList.toggle('change-btn');
  if (btnMobile.classList.contains('change-btn')) {
    btnMobile.children[0].src = btnMobile.children[0].src.replace('open', 'close');
    menuMobile.classList.remove('close-menu');
    menuMobile.classList.add('open-menu');
    menuMobile.style.display = 'block'
  } else {
    closeMenu();
  }
}

// Modal

const visit = document.querySelector('.visit');
const tooltipVisit = document.querySelector('.tooltip');
const pass = document.querySelector('.pass');

pass.addEventListener('click', (e) => {
  e.preventDefault();
})

visit.addEventListener('click', (e) => {
  e.preventDefault();
})

visit.addEventListener('mouseover', () => {
  tooltipVisit.style.display = 'block'
})

visit.addEventListener('mouseleave', () => {
  tooltipVisit.style.display = 'none'
})

// Control

const body = document.getElementsByTagName("body")[0];
const section = document.getElementsByTagName("section")[0];
body.classList.value = body.classList.value.replace(/\s/g, '');

if (body.classList.value == '') {
  homeScripts();
  body.classList.add('Home');
};
section.classList.contains('posts') ? noticesScripts() : '';
section.classList.contains('post') ? postScripts() : '';


