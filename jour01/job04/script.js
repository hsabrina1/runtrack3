function bisextile(annee) {
    // Une année est bisextile si elle est divisible par 4,
    // mais non divisible par 100, sauf si elle est divisible par 400.
    if ((annee % 4 === 0 && annee % 100 !== 0) || (annee % 400 === 0)) {
        return true;
    } else {
        return false;
    }
}
