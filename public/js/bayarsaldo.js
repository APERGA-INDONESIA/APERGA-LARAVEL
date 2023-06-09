function startCountdown() {
    var hourElement = document.querySelector('.timer-hour');
    var minuteElement = document.querySelector('.timer-minute');
    var secondElement = document.querySelector('.timer-second');

    var hour = parseInt(hourElement.textContent);
    var minute = parseInt(minuteElement.textContent);
    var second = parseInt(secondElement.textContent);

    var timer = setInterval(function() {
      if (hour === 0 && minute === 0 && second === 0) {
        clearInterval(timer);
        // Lakukan tindakan setelah waktu berakhir
        console.log('Waktu telah berakhir');
      } else {
        if (second === 0) {
          if (minute === 0) {
            hour--;
            minute = 58;
          } else {
            minute--;
          }
          second = 59;
        } else {
          second--;
        }

        hourElement.textContent = hour < 10 ? '0' + hour : hour;
        minuteElement.textContent = minute < 10 ? '0' + minute : minute;
        secondElement.textContent = second < 10 ? '0' + second : second;
      }
    }, 1000);
  }

  // Panggil fungsi startCountdown untuk memulai countdown
  startCountdown();
