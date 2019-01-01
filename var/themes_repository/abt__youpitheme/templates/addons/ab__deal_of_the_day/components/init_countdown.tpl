{if $addons.ab__deal_of_the_day.count_to == 'end_of_the_day' || !$promotion.to_date}
    {$to_timestamp = ('tomorrow midnight'|strtotime)}
{else}
    {$to_timestamp = $promotion.to_date}
{/if}

<div id="ab__deal_of_the_day_{$block.block_id}"></div>
{script src="js/addons/ab__deal_of_the_day/flipclock.min.js"}
<script type="text/javascript">
    (function (_, $) {
        $(document).ready(function() {
            var now = new Date(),
                total_seconds = {$to_timestamp - 'Z'|date} - (now.getTime()/1000 + now.getTimezoneOffset() * 60);
            _.clock = $('#ab__deal_of_the_day_{$block.block_id}').FlipClock(total_seconds, {
                countdown: true,
                clockFace: (total_seconds > 86400) ? 'DailyCounter' : 'HourlyCounter',
                lang: {
                    'years'   : '{__('ab__dotd.counter.years')}',
                    'months'  : '{__('ab__dotd.counter.months')}',
                    'days'    : '{__('ab__dotd.counter.days')}',
                    'hours'   : '{__('ab__dotd.counter.hours')}',
                    'minutes' : '{__('ab__dotd.counter.minutes')}',
                    'seconds' : '{__('ab__dotd.counter.seconds')}'
                },
                'onCreate' : function() { {* Это вам не колбэк, это вызывать надо *}
                    setTimeout(
                    function() {
                        $(".flip-clock-divider").wrap("<div class='ab-flip-clock-item'></div>");
                        let deviderWraps = document.querySelectorAll(".ab-flip-clock-item");
                        for (let i = 0; i < deviderWraps.length; i++) {
                            let count = 0;
                            while (!$(deviderWraps[i]).next().hasClass("ab-flip-clock-item")) {
                                let elem = $(deviderWraps[i]).next().detach();
                                $(deviderWraps[i]).append(elem);
                                if (i == deviderWraps.length-1 && ++count == 2) {
                                    $(".flip-clock-wrapper").addClass("wrapped");
                                    break;
                                };
                            };
                        }
                    }, 50);

                }()
            });
        });
    })(Tygh, Tygh.$);
</script>