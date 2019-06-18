function seleksi(string) {
    for (var i = 0, output = '', valid = "eE-0123456789."; i < string.length; i++)
        if (valid.indexOf(string.charAt(i)) != -1)
            output += string.charAt(i)
    return output;
}

function koma(num) {
    var n = Math.floor(num);
    var myNum = num + "";
    var myDec = ""

    if (myNum.indexOf('.', 0) > -1) {
        myDec = myNum.substring(myNum.indexOf('.', 0), myNum.length);
    }

    var arr = new Array('0'),
        i = 0;
    while (n > 0) {
        arr[i] = '' + n % 1000;
        n = Math.floor(n / 1000);
        i++;
    }
    arr = arr.reverse();
    for (var i in arr)
        if (i > 0)
            while (arr[i].length < 3) arr[i] = '0' + arr[i];
    return arr.join() + myDec;
}

function CekBilPrima(ptest) {
    if (ptest == 2)
        return 0;

    if (ptest % 2 == 0) {
        return 2;
    }

    var primeFound = true;
    var maxPrimeSeek = Math.sqrt(ptest) + 1;

    for (var i = 3; i <= maxPrimeSeek; i++, i++) {
        if (!(ptest % i)) {
            primeFound = false;
            break;
        }
    }
    if (primeFound)
        return 0;
    else
        return i;
}

function BilPrima(form) {
    var num = parseInt(seleksi(form.number.value));
    form.number.value = num;
    if (isNaN(num) || num < 2) {
        // form.result.value = "Masukan HARUS Bilangan!";
        // form.result2.value = "";
        document.getElementById("result").innerHTML = "Masukan harus bilangan!";
        document.getElementById("result2").innerHTML = "";
        return;
    }
    var primeNum = CekBilPrima(num);
    if (primeNum == 0) {
        // form.result.value = num + " adalah bilangan prima.";
        // form.result2.value = "";
        document.getElementById("result").innerHTML = num + " adalah bilangan prima.";
        document.getElementById("result2").innerHTML = "";
    } else {
        document.getElementById("result").innerHTML = koma(num) + " BUKAN bilangan prima.";
        document.getElementById("result2").innerHTML = "dapat dibagi " + primeNum;
        // form.result.value = koma(num) + " bukan bilangan prima.";
        // form.result2.value = "dapat dibagi " + primeNum;
    }
}

function mod(m, n) {
    return m - n * Math.floor(m / n)
}

function Faktorkan(n) {
    var temp = ""
    var T = n
    var PRIME = 1
    var i = 1
    while ((T > 1) && (++i < Math.sqrt(n) + 1)) {
        while (mod(T, i) == 0) {
            T = T / i
            if (PRIME == 0) temp += "*"
            if (PRIME == 1) PRIME = 0
            temp += i
        }
    }
    if (PRIME == 1)
        temp = "Bilangan Prima"
    else if (T > 1)
        temp += "*" + T
    return temp
}

function GCD(m, n) {
    while (m != n) {
        if (m == 1 || n == 1)
            return 1
        else if (m < n)
            n = mod(n, m)
        else
            m = mod(m, n)
    }
    return m
}

function Pilihan(form) {
    var r = -form.r.value
    var n = -(r - 1)
    var line = ""

    for (i = 0; i < 30; i++) {
        line += n + " "
        n = n - r
    }

    return line
}

function Proses1(form) {
    var p = form.p.value
    var q = form.q.value
    form.N.value = p * q
    form.r.value = (p - 1) * (q - 1)
    form.ed.value = Pilihan(form)
    return ""
}

function Proses2(form) {
    form.factors.value = Faktorkan(form.K.value)
    return ""
}

function Proses3(form) {
    var temp = ""
    var e = form.e.value
    var d = form.d.value
    var r = form.r.value
    var N = form.N.value

    temp += "      e   = " + e + "\n"
    temp += "      d   = " + d + "\n"
    temp += "      N   = " + N + "\n"
    temp += "      r   = " + r + "\n"
    temp += "      e*d = " + eval(e * d) + "\n"
    temp += "e*d mod r = " + mod((e * d), r) + "\n"

    if (GCD(e, r) == 1)
        temp += "e & r adalah Relatif Prima \n"
    else
        temp += "e & r adalah Tidak Relatif Prima karena gcd(e,r) = " + GCD(e, r) + "\n"

    if (GCD(d, r) == 1)
        temp += "d & r adalah Relatif Prima \n"
    else
        temp += "d & r adalah Tidak Relatif Prima karena gcd(d,r) = " + GCD(d, r) + "\n"

    form.checker.value = temp
    return ""
}
