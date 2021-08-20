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
