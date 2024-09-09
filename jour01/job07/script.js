function jourtravaille(date) {
    // Tableau des jours fériés en 2020 (format : MM-DD)
    const joursFeries = [
        '01-01', // Nouvel an
        '04-13', // Lundi de Pâques
        '05-01', // Fête du travail
        '05-08', // Victoire 1945
        '05-21', // Ascension
        '06-01', // Lundi de Pentecôte
        '07-14', // Fête nationale
        '08-15', // Assomption
        '11-01', // Toussaint
        '11-11', // Armistice
        '12-25'  // Noël
    ];

    // Récupération des informations de la date
    var jour = date.getDate(); // Numéro du jour
    var mois = date.getMonth() + 1; // Mois (getMonth() commence à 0 donc +1)
    var annee = date.getFullYear(); // Année

    // Formater la date pour correspondre aux jours fériés
    var dateFormat = (mois < 10 ? '0' : '') + mois + '-' + (jour < 10 ? '0' : '') + jour;

    // Vérifier si la date est un jour férié
    if (joursFeries.includes(dateFormat)) {
        console.log(`Le ${jour} ${mois} ${annee} est un jour férié.`);
    } 
    // Vérifier si c'est un week-end (samedi ou dimanche)
    else if (date.getDay() === 6 || date.getDay() === 0) {
        // 6 correspond au samedi et 0 au dimanche
        console.log(`Non, ${jour} ${mois} ${annee} est un week-end.`);
    } 
    // Sinon c'est un jour travaillé
    else {
        console.log(`Oui, ${jour} ${mois} ${annee} est un jour travaillé.`);
    }
}
