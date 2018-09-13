var active = ['wgs', 'wes', 'rns', 'mirna', 'chip', 'methyl', 'tcr'];
var section = ['wgsSection', 'wesSection', 'rnsSection', 'mirnaSection', 'chipSection', 'methylSection', 'tcrSection'];

function hidePHPSection(section) {
    $("#" + section).hide();
}
$("a").click(function () {
    var phpSection = ['wgsSectionPHP', 'wesSectionPHP', 'rnsSectionPHP', 'mirnaSectionPHP', 'chipSectionPHP', 'methylSectionPHP', 'tcrSectionPHP'];
    current_id = this.id;
    for(i=0; i<active.length; i++){
        if(active[i] == current_id) {
            $("#" + current_id).addClass('active');
            var id_index = active.indexOf(current_id);
            $("#" + section[id_index]).show();

            if (id_index > -1)
                phpSection.splice(id_index, 1);

            phpSection.forEach(hidePHPSection);
        }
        else {
            $("#" + active[i]).removeClass('active');
            $("#" + section[i]).hide();
        }
    }
});