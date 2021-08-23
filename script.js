const banners = document.querySelectorAll('.banner');

banners.forEach((banner, index) => {
  const bannerLink = banner.dataset.link;
  banner.style.background = `linear-gradient(180deg, rgba(0, 0, 0, 0) 44.27%, #000000 100%), url(${bannerLink}) no-repeat center`;
  banner.style.backgroundSize = 'cover';

  banner.addEventListener('mouseover', (e) => {
      banners[0].style.width = '60%';
      banners[0].style.transition = '0.5s';
      banners[1].style.width = '40%'
    if (index === 1) {
      banners[1].style.width = '60%';
      banners[1].style.transition = '0.5s';
      banners[0].style.width = '40%'
    }
  })
    banner.addEventListener('mouseout', () => {
      banners[1].style.width = '50%';
      banners[0].style.width = '50%'
  })
})


async function fetchAPI() {
  const response = await fetch('https://www.googleapis.com/youtube/v3/search?key=AIzaSyCl7BWLz9l918xs3GWuFRLEzri2aZZHibA&channelId=UCzWBYu-vXwIy6Zd5Bs0K2Uw&part=snippet,id&order=date&maxResults=20');
  const resolve = await response.json();
  console.log(resolve);
}

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

const h2 = document.createElement('h2');
h2.innerText = 'O jogo começou!';
h2.classList.add('start-game');

const matchInfo = {
  data() {
    countdown('23 August 2021 16:40:00 GMT-0300');
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
  }
}

matchInfo.data();
matchInfo.gameStart(true);

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
