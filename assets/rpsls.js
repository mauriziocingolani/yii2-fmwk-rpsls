(function ($) {
    $(function () {
        var types = ['rock', 'paper', 'scissors', 'lizard', 'spock'];
        var reverseTypes = {0: 'rock', 1: 'paper', 2: 'scissors', 3: 'lizard', 4: 'spock', };
        var results = [
            [null, false, true, true, false],
            [true, null, false, false, true],
            [false, true, null, true, false],
            [false, true, false, null, true],
            [true, false, true, false, null],
        ];
        $('.rpsls a').click(function (event) {
            var type = $(this).attr('data-type');
            var myType = types.indexOf(type);
            var opponentType = Math.floor(Math.random() * 5);
            $('.rpsls-result i.my').removeClass().
                    addClass('my fa fa-hand-' + reverseTypes[myType] + '-o').
                    css('color', myType === opponentType ? 'black' : (win ? 'green' : 'red'));
            $('.rpsls-result i.opponent').removeClass().
                    addClass('opponent fa fa-hand-' + reverseTypes[opponentType] + '-o').
                    css('color', myType === opponentType ? 'black' : (win ? 'red' : 'green'));
            if (myType === opponentType) {
                $('.rpsls-result .result').css('color', 'black');
                $('.rpsls-result .result').text('tie');
            } else {
                var win = results[myType][opponentType];
                $('.rpsls-result .result').css('color', win ? 'green' : 'red');
                $('.rpsls-result .result').text(win ? 'win' : 'lose');
            }
            $('.rpsls .rpsls-result').fadeIn();
        });
    });
})(jQuery);