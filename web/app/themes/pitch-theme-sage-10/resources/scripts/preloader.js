/*eslint-disable */
;(function () {
  let isPageReady = false
  let isRunning = false

  const startTime = Date.now()
  const timeout = 2000

  const event = new Event('isPageReady')

  function getIsVisible(el) {
    const {top, height} = el.getBoundingClientRect()
    const {innerHeight} = window
    const throttle = window.innerHeight * 0.05

    const isVisible = innerHeight - top > throttle && top + height > throttle

    return isVisible
  }

  function getRandomDirection() {
    const directions = ['up', 'down', 'left', 'right']
    return directions[Math.floor(Math.random() * directions.length)]
  }

  function setIsReady() {
    clearInterval(interval)
    isPageReady = true
    window.isPageReady = isPageReady
    const splashScreen = document.querySelector('#splash-screen')
    if (splashScreen) {
      const transitionDelay = 400
      const transitionDuration = 700
      const direction = getRandomDirection()

      splashScreen.style.pointerEvents = 'none'
      splashScreen.style.transition = `all ${transitionDuration}ms cubic-bezier(0.5, 1, 0.89, 1) ${transitionDelay}ms`

      switch (direction) {
        case 'up':
          splashScreen.style.transform = 'translateY(-100%)'
          break
        case 'down':
          splashScreen.style.transform = 'translateY(100%)'
          break
        case 'left':
          splashScreen.style.transform = 'translateX(-100%)'
          break
        case 'right':
          splashScreen.style.transform = 'translateX(100%)'
          break
      }

      setTimeout(() => {
        window.dispatchEvent(event)
        splashScreen.remove()
      }, transitionDuration + transitionDelay)
    } else {
      window.dispatchEvent(event)
    }
  }

  const interval = setInterval(async () => {
    if (!isPageReady && !isRunning) {
      isRunning = true

      const areFontsLoaded = (await document.fonts.ready).status === 'loaded'
      const isDocumentReady = document.readyState === 'complete'

      if (areFontsLoaded && isDocumentReady) {
        let allVisibleAssetsLoaded = true

        const images = Array.from(document.images)
        images.forEach((image) => {
          const isVisible = getIsVisible(image)
          const isLoading = !image.complete
          if (isVisible && isLoading) {
            allVisibleAssetsLoaded = false
          }
        })

        const videos = Array.from(document.getElementsByTagName('video'))
        videos.forEach((video) => {
          const isVisible = getIsVisible(video)
          const isLoading = video.readyState !== 4
          if (isVisible && isLoading) {
            allVisibleAssetsLoaded = false
          }
        })

        if (!isPageReady && allVisibleAssetsLoaded) {
          setIsReady()
        }
      }

      isRunning = false
    }

    if (!isPageReady && Date.now() - startTime >= timeout) {
      setIsReady()
    }
  }, 100)
})()
