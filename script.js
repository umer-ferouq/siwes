let deferredPrompt;

window.addEventListener('beforeinstallprompt', function(event) {
  event.preventDefault();
  deferredPrompt = event;
  showInstallPrompt();
});

function showInstallPrompt() {
  // Show a button or other UI element to prompt the user to install the PWA
}

function installPWA() {
  if (deferredPrompt) {
    deferredPrompt.prompt();
    deferredPrompt.userChoice.then(function(choiceResult) {
      if (choiceResult.outcome === 'accepted') {
        // The user accepted the installation prompt
      }
      deferredPrompt = null;
    });
  }
}