$(function() {
    var zip = '12474'
    var city = 'Roxbury,us'
    var key = '#'
    $.ajax({
        url: 'https://api.openweathermap.org/data/2.5/weather',
        dataType: 'json',
        type: 'GET',
        data: {
            q: city,
            appid: key,
            units: 'imperial'
        },
        success: function(data) {
            var wd = getWindDirection(data.wind.deg)
            var sr = new Date(data.sys.sunrise * 1000)
            var ss = new Date(data.sys.sunset * 1000)
            $('#currentImage').attr('src', `./weather/${data.weather[0].icon}.png`);
            $('#temp').html(`${data.main.temp} &deg;F`);
            $('#desc').html(`${data.weather[0].main}, ${data.weather[0].description}`);
            $('#windSpeed').html(data.wind.speed);
            $('#windDirection').html(wd);
            $('#sunRise').html(sr.toLocaleTimeString());
            $('#sunSet').html(ss.toLocaleTimeString())
        }
    });
    $.ajax({
        url: 'http://api.openweathermap.org/data/2.5/forecast?zip=12474&appid=fc5458d1cb9e84de3545adcfde1355fe',
        dataType: 'json',
        type: 'GET',
        data: {
            units: 'imperial'
        },
        success: function(data) {
            var dayList = [];
            for (var i = 0; i < data.list.length; i++) {
                dayList.push(data.list[i])
            }
            var days = {};
            var dayNum = 0;
            var yesterday = new Date(9726481 * 1000);
            dayList.forEach(function(d) {
                var currentDay = new Date(d.dt * 1000);
                if (currentDay.getDate() === yesterday.getDate()) {
                    days[`day${dayNum}`].push(d)
                } else if (currentDay.getDate() !== yesterday.getDate()) {
                    dayNum += 1;
                    days[`day${dayNum}`] = [];
                    days[`day${dayNum}`].push(d)
                    yesterday = new Date(d.dt * 1000)
                }
            })
            $('#date1').html(getDate(days.day2[0]));
            $('#image1').attr('src', `../weather/${findForecast(days.day2)}.png`);
            $('#desc1').html(getDesc(days.day2));
            $('#low1').html(Math.floor(findLow(days.day2)));
            $('#high1').html(Math.floor(findHigh(days.day2)));
            $('#date2').html(getDate(days.day3[0]))
            $('#image2').attr('src', `../weather/${findForecast(days.day3)}.png`);
            $('#desc2').html(getDesc(days.day3));
            $('#low2').html(Math.floor(findLow(days.day3)))
            $('#high2').html(Math.floor(findHigh(days.day3)))
            $('#date3').html(getDate(days.day4[0]))
            $('#image3').attr('src', `../weather/${findForecast(days.day4)}.png`);
            $('#desc3').html(getDesc(days.day4));
            $('#low3').html(Math.floor(findLow(days.day4)))
            $('#high3').html(Math.floor(findHigh(days.day4)))
            $('#date4').html(getDate(days.day5[0]))
            $('#image4').attr('src', `../weather/${findForecast(days.day5)}.png`);
            $('#desc4').html(getDesc(days.day5));
            $('#low4').html(Math.floor(findLow(days.day5)))
            $('#high4').html(Math.floor(findHigh(days.day5)))
            $('#date5').html(getDate(days.day6[0]))
            $('#image5').attr('src', `../weather/${findForecast(days.day6)}.png`);
            $('#desc5').html(getDesc(days.day6));
            $('#low5').html(Math.floor(findLow(days.day6)))
            $('#high5').html(Math.floor(findHigh(days.day6)))
        }
    })
});

function findLow(day) {
    var low = day[0].main.temp_min
    day.forEach(function(d) {
        if (d.main.temp_min < low) {
            low = d.main.temp_min
        }
    })
    return low
}

function findHigh(day) {
    var high = day[0].main.temp_max
    day.forEach(function(d) {
        if (d.main.temp_max > high) {
            high = d.main.temp_max
        }
    })
    return high
}

function findForecast(day) {
    var icon = '50d';
    day.forEach(function(d) {
        if (d.weather[0].icon === '01d' || d.weather[0].icon === '01n') {
            icon = '01d'
        } else if (d.weather[0].icon === '02d' || d.weather[0].icon === '02n') {
            icon = '02d'
        } else if (d.weather[0].icon === '03d' || d.weather[0].icon === '03n') {
            icon = '03d'
        } else if (d.weather[0].icon === '04d' || d.weather[0].icon === '04n') {
            icon = '04d'
        } else if (d.weather[0].icon === '10d' || d.weather[0].icon === '10n') {
            icon = '10d'
        } else if (d.weather[0].icon === '09d' || d.weather[0].icon === '09n') {
            icon = '09d'
        } else if (d.weather[0].icon === '11d' || d.weather[0].icon === '11n') {
            icon = '11d'
        } else if (d.weather[0].icon === '13d' || d.weather[0].icon === '13n') {
            icon = '13d'
        }
    })
    return icon
}

function getDate(day) {
    var dateData = new Date(day.dt * 1000);
    var date = `${dateData.getMonth()+1}/${dateData.getDate()}/${dateData.getFullYear()}`;
    return date
}

function getWindDirection(deg) {
    if (deg > 11.25 && deg < 33.75) {
        return "NNE"
    } else if (deg > 33.75 && deg < 56.25) {
        return "ENE"
    } else if (deg > 56.25 && deg < 78.75) {
        return "E"
    } else if (deg > 78.75 && deg < 101.25) {
        return "ESE"
    } else if (deg > 101.25 && deg < 123.75) {
        return "ESE"
    } else if (deg > 123.75 && deg < 146.25) {
        return "SE"
    } else if (deg > 146.25 && deg < 168.75) {
        return "SSE"
    } else if (deg > 168.75 && deg < 191.25) {
        return "S"
    } else if (deg > 191.25 && deg < 213.75) {
        return "SSW"
    } else if (deg > 213.75 && deg < 236.25) {
        return "SW"
    } else if (deg > 236.25 && deg < 258.75) {
        return "WSW"
    } else if (deg > 258.75 && deg < 281.25) {
        return "W"
    } else if (deg > 281.25 && deg < 303.75) {
        return "WNW"
    } else if (deg > 303.75 && deg < 326.25) {
        return "NW"
    } else if (deg > 326.25 && deg < 348.75) {
        return "NNW"
    } else {
        return "N"
    }
}

function getDesc(day) {
    var weatherContains = [];
    var weatherMain = [];
    var weatherDesc = [];
    day.forEach(function(d) {
        var wM = d.weather[0].main;
        var wD = d.weather[0].description;
        if (!weatherContains.includes(wM)) {
            weatherContains.push(wM);
            weatherMain[`${wM}`] = 1
        } else {
            weatherMain[`${wM}`] += 1
        };
        if (!weatherContains.includes(wD)) {
            weatherContains.push(wD);
            weatherDesc[`${wD}`] = 1
        } else {
            weatherDesc[`${wD}`] += 1
        }
    });
    return makeDesc(weatherMain, weatherDesc)
};

function makeDesc(objMain, objDesc) {
    var main = Object.keys(objMain).reduce((a, b) => objMain[a] > objMain[b] ? a : b);
    var desc = Object.keys(objDesc).reduce((a, b) => objDesc[a] > objDesc[b] ? a : b);
    return `${main} | ${desc}`
}
