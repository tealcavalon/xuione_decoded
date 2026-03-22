<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?134                 ?0                  	;0	>>134
1   5    ECHO/40                   ?0        1:'        var rPlayer = jwplayer("now__playing__player");
        rPlayer.setup({
            "file": window.rURLs[0],
            "aspectratio": \'16:9\',
            "autostart": true,
            "width": \'100%\'
        });
        rPlayer.on(\'error\', showError);
        rPlayer.play();
        ' ?0                  	;0
2   7    GOTO/253                  ?0        ?307                 ?2                  	;0
3   9    ECHO/40                   ?0        3:'        $(\'video source\').last().on(\'error\', function() {
            ' ?0                  	;0
4   10   GOTO/253                  ?0        ?173                 ?4                  	;0
5   12   ECHO/40                   ?0        5:'        $("#episode_" + window.currentID).addClass("disabled");
        $("#episode_" + window.currentID + " ul").show();
        $("#player_row").slideUp(250, function() {
            $(\'html,body\').animate({
                scrollTop: $(".seasons").offset().top - 90
            });
        });
        ' ?0                  	;0
6   13   GOTO/253                  ?0        ?8                   ?6                  	;0
7   15   ECHO/40                   ?0        7:'        $("#player_row").slideUp(250);
        $(\'html,body\').animate({
            scrollTop: 0
        });
        $("#player__error").html("Error " + rError.code + " - " + rError.message);
        $("#player__error").slideDown(250);
        ' ?0                  	;0
8   17   GOTO/253                  ?0        ?159                 ?8                  	;0
9   19   INIT_FCALL_BY_NAME/59     ?0        ?0                   9:'str_replace'     	;3
10  19   SEND_VAL_EX/116           ?80       11:'\''              ?1                  	;0
11  19   SEND_VAL_EX/116           ?96       12:'\\\''            ?2                  	;0
12  19   INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'json_encode'    	;1
13  19   INIT_FCALL_BY_NAME/59     ?0        ?0                   15:'array_flip'     	;1
14  19   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
15  19   DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
16  19   SEND_VAR_NO_REF_EX/50     ?80       $18                  ?1                  	;0
17  19   DO_FCALL_BY_NAME/131      $19=      ?0                   ?0                  	;0
18  19   SEND_VAR_NO_REF_EX/50     ?112      $19                  ?3                  	;0
19  19   DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
20  19   ECHO/40                   ?0        $20                  ?0                  	;0
21  20   ECHO/40                   ?0        17:'\');
            var rCategories = JSON.parse(\'' ?0                  	;0
22  21   INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'str_replace'    	;3
23  21   SEND_VAL_EX/116           ?80       20:'\''              ?1                  	;0
24  21   SEND_VAL_EX/116           ?96       21:'\\\''            ?2                  	;0
25  21   INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'json_encode'    	;1
26  21   SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
27  21   DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
28  21   SEND_VAR_NO_REF_EX/50     ?112      $21                  ?3                  	;0
29  21   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
30  21   ECHO/40                   ?0        $22                  ?0                  	;0
31  22   ECHO/40                   ?0        24:'\');
            window.location.href = \'./' ?0                  	;0
32  23   ECHO/40                   ?0        16?2                 ?0                  	;0
33  24   GOTO/253                  ?0        ?194                 ?25                 	;0
34  26   ECHO/40                   ?0        26:'],
				format: wNumb({
					decimals: 0,
				})
			});
			var firstValues = [
				document.getElementById(\'filter__years-start\'),
				document.getElementById(\'filter__years-end\')
			];
			firstSlider.noUiSlider.on(\'update\', function( values, handle ) {
				firstValues[handle].innerHTML = values[handle];
			});
		} else {
			return false;
		}
		return false;
	}
	$(window).on(\'load\', initYearSlider());
    
    function initRatingSlider() {
		if ($(\'#filter__rating\').length) {
			var secondSlider = document.getElementById(\'filter__rating\');
			noUiSlider.create(secondSlider, {
				range: {
					\'min\': 0,
					\'max\': 10
				},
                ' ?0                  	;0
35  27   IS_EQUAL/17               #23=      16?2                 27:'movies'         	;0
36  27   JMPZ/43                   ?0        #23                  ?38                 	;0	>>38
37  28   GOTO/253                  ?0        ?40                  ?28                 	;0
38  30   ECHO/40                   ?0        29:'                step: 1,
                ' ?0                  	;0	<<36
39  31   GOTO/253                  ?0        ?169                 ?30                 	;0
40  33   GOTO/253                  ?0        ?168                 ?31                 	;0
41  35   ECHO/40                   ?0        32:'    window.currentID = 0;
    window.rURLs = $.parseJSON(\'' ?0                  	;0
42  36   INIT_FCALL_BY_NAME/59     ?0        ?0                   33:'str_replace'    	;3
43  36   SEND_VAL_EX/116           ?80       35:'\''              ?1                  	;0
44  36   SEND_VAL_EX/116           ?96       36:'\\\''            ?2                  	;0
45  36   INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'json_encode'    	;1
46  36   SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
47  36   DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
48  36   SEND_VAR_NO_REF_EX/50     ?112      $24                  ?3                  	;0
49  36   DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
50  36   ECHO/40                   ?0        $25                  ?0                  	;0
51  37   ECHO/40                   ?0        39:'\');
    
    ' ?0                  	;0
52  38   IS_EQUAL/17               #26=      16?2                 40:'episodes'       	;0
53  38   BOOL_NOT/13               #27=      #26                  ?0                  	;0
54  38   JMPZ/43                   ?0        #27                  ?56                 	;0	>>56
55  39   GOTO/253                  ?0        ?265                 ?41                 	;0
56  41   JMPZ/43                   ?0        16?4                 ?58                 	;0	>>58	<<54
57  42   GOTO/253                  ?0        ?238                 ?42                 	;0
58  44   GOTO/253                  ?0        ?236                 ?43                 	;0	<<56
59  46   INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'str_replace'    	;3
60  46   SEND_VAL_EX/116           ?80       46:'\''              ?1                  	;0
61  46   SEND_VAL_EX/116           ?96       47:'\\\''            ?2                  	;0
62  46   INIT_FCALL_BY_NAME/59     ?0        ?0                   48:'json_encode'    	;1
63  46   INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'array_flip'     	;1
64  46   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
65  46   DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
66  46   SEND_VAR_NO_REF_EX/50     ?80       $28                  ?1                  	;0
67  46   DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
68  46   SEND_VAR_NO_REF_EX/50     ?112      $29                  ?3                  	;0
69  46   DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
70  46   ECHO/40                   ?0        $30                  ?0                  	;0
71  47   ECHO/40                   ?0        52:'\');
            ' ?0                  	;0
72  48   ASSIGN/38                 ?13       16?1                 53:array (
)        	;0
73  49   INIT_STATIC_METHOD_CALL/113 ?0        54:'XUI'             56:'d15Dce7a49F71fea'	;2
74  49   FETCH_DIM_FUNC_ARG/93     $32=      16?6                 58:'category_ids'   	;1
75  49   SEND_VAR_EX/66            ?80       $32                  ?1                  	;0
76  49   IS_EQUAL/17               #33=      16?2                 59:'movies'         	;0
77  49   JMPZ/43                   ?0        #33                  ?80                 	;0	>>80
78  49   QM_ASSIGN/22              #34=      60:'movie'           ?0                  	;0
79  49   JMP/42                    ?0        ?81                  ?0                  	;0	>>81
80  49   QM_ASSIGN/22              #34=      61:'series'          ?0                  	;0	<<77
81  49   SEND_VAL_EX/116           ?96       #34                  ?2                  	;0	<<79
82  49   DO_FCALL/60               $35=      ?0                   ?0                  	;0
83  49   FE_RESET_R/77             $36=      $35                  ?90                 	;0
84  49   FE_FETCH_R/78             ?0        $36                  16?7                	;90	>>90	<<89
85  50   FETCH_DIM_R/81            $37=      16?7                 62:'title'          	;0
86  50   FETCH_DIM_R/81            $39=      16?7                 63:'id'             	;0
87  50   ASSIGN_DIM/147            ?20       16?1                 $37                 	;0
88  50   OP_DATA/137               ?0        $39                  ?0                  	;0
89  51   JMP/42                    ?0        ?84                  ?0                  	;0	>>84
90  51   FE_FREE/127               ?0        $36                  ?0                  	;0	<<83
91  54   GOTO/253                  ?0        ?180                 ?64                 	;0
92  56   IS_EQUAL/17               #40=      16?2                 65:'profile'        	;0
93  56   JMPZ/43                   ?0        #40                  ?95                 	;0	>>95
94  57   GOTO/253                  ?0        ?113                 ?66                 	;0
95  59   IS_EQUAL/17               #41=      16?2                 67:'live'           	;0	<<93
96  59   JMPZ/43                   ?0        #41                  ?98                 	;0	>>98
97  60   GOTO/253                  ?0        ?315                 ?68                 	;0
98  62   IS_EQUAL/17               #42=      16?2                 69:'movie'          	;0	<<96
99  62   JMPNZ_EX/47               #42=      #42                  ?102                	;0	>>102
100 62   IS_EQUAL/17               #43=      16?2                 70:'episodes'       	;0
101 62   BOOL/52                   #42=      #43                  ?0                  	;0
102 62   JMPZ/43                   ?0        #42                  ?104                	;0	>>104	<<99
103 63   GOTO/253                  ?0        ?145                 ?71                 	;0
104 65   IS_EQUAL/17               #44=      16?2                 72:'movies'         	;0	<<102
105 65   JMPNZ_EX/47               #44=      #44                  ?108                	;0	>>108
106 65   IS_EQUAL/17               #45=      16?2                 73:'series'         	;0
107 65   BOOL/52                   #44=      #45                  ?0                  	;0
108 65   BOOL_NOT/13               #46=      #44                  ?0                  	;0	<<105
109 65   JMPZ/43                   ?0        #46                  ?111                	;0	>>111
110 66   GOTO/253                  ?0        ?144                 ?74                 	;0
111 68   ECHO/40                   ?0        75:'    $(document).ready(function () {
        $(".filter__btn").click(function() {
            var rSort = JSON.parse(\'' ?0                  	;0	<<109
112 69   GOTO/253                  ?0        ?59                  ?76                 	;0
113 72   ECHO/40                   ?0        77:'    function AtoZ() {
        $("#sort_bouquet").append($("#sort_bouquet option").remove().sort(function(a, b) {
            var at = $(a).text().toUpperCase(), bt = $(b).text().toUpperCase();
            return (at > bt) ? 1 : ((at < bt) ? -1 : 0);
        }));
    }
    function MoveUp() {
        var rSelected = $(\'#sort_bouquet option:selected\');
        if (rSelected.length) {
            var rPrevious = rSelected.first().prev()[0];
            if ($(rPrevious).html() != \'\') {
                rSelected.first().prev().before(rSelected);
            }
        }
    }
    function MoveDown() {
        var rSelected = $(\'#sort_bouquet option:selected\');
        if (rSelected.length) {
            rSelected.last().next().after(rSelected);
        }
    }
    function doLogout() {
        window.location.href = "logout";
    }
    
    $(document).ready(function () {
        $("#output_type").change(function() {
            $("#download_type").trigger("change");
        });
        $("#download_type").change(function() {
            if ($("#download_type").val()) {
                ' ?0                  	;0
114 73   INIT_FCALL_BY_NAME/59     ?0        ?0                   78:'rtrim'          	;2
115 73   INIT_STATIC_METHOD_CALL/113 ?0        80:'XUI'             82:'C65C7f64E35C199f'	;0
116 73   DO_FCALL/60               $47=      ?0                   ?0                  	;0
117 73   SEND_VAR_NO_REF_EX/50     ?80       $47                  ?1                  	;0
118 73   SEND_VAL_EX/116           ?96       84:'/'               ?2                  	;0
119 73   DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
120 73   ASSIGN/38                 ?31       16?8                 $48                 	;0
121 74   FETCH_CONSTANT/99         #50=      ?0                   85:'PLATFORM'       	;16
122 74   IS_EQUAL/17               #51=      #50                  88:'xui'            	;0
123 74   JMPZ/43                   ?0        #51                  ?125                	;0	>>125
124 75   GOTO/253                  ?0        ?233                 ?89                 	;0
125 77   ECHO/40                   ?0        90:'                rText = "' ?0                  	;0	<<123
126 78   GOTO/253                  ?0        ?217                 ?91                 	;0
127 81   ECHO/40                   ?0        92:'    
    function setChannel(rID, rStart=null, rDuration=null) {
        if (window.updateTimer !== null) {
            clearTimeout(window.updateTimer);
        }
        
        $("html, body").animate({ scrollTop: 0 }, "fast");
        if (rStart && rDuration) {
            var rURL = "listings.php?id=" + encodeURIComponent(rID) + "&start=" + encodeURIComponent(rStart) + "&duration=" + encodeURIComponent(rDuration);
        } else {
            var rURL = "listings.php?id=" + encodeURIComponent(rID);
        }
        $.getJSON(rURL, function(rData) {
            $("#now__playing__title").html(rData.title);
            $("#now__playing__epg").html(rData.epg_title);
            $("#now__playing__text").html(rData.epg_description);
            
            var rPlayer = jwplayer("now__playing__player");
            rPlayer.setup({
                "file": rData.url,
                "aspectratio": \'16:9\',
                "autostart": true,
                "width": \'100%\',
            });
            rPlayer.play();
            
            if ($(window).width() > 768) {
                $(".close__btn").fadeIn(250);
            }
            $("#now__playing__box").slideDown(250);
            
            if (!rStart || !rDuration) {
                window.updateTimer = setTimeout(updateChannel, 60000, rID);
            }
        });
    }
    
    function closeChannel() {
        if (window.updateTimer !== null) {
            clearTimeout(window.updateTimer);
        }
        
        $(".close__btn").fadeOut(250);
        $("#now__playing__box").slideUp(250, function() {
            $("#now__playing__title").html("' ?0                  	;0
128 82   ISSET_ISEMPTY_CV/197      #52=      16?9                 ?0                  	;33554432
129 82   JMPZ/43                   ?0        #52                  ?131                	;0	>>131
130 83   GOTO/253                  ?0        ?279                 ?93                 	;0
131 85   ECHO/40                   ?0        94:'LIVE TV'         ?0                  	;0	<<129
132 86   GOTO/253                  ?0        ?288                 ?95                 	;0
133 87   GOTO/253                  ?0        ?279                 ?96                 	;0
134 89   ECHO/40                   ?0        97:'    <footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="footer__copyright">
                        &copy; 2021 <img height="20px" style="padding-left: 10px; padding-right: 10px; margin-top: -2px;" class="whiteout" src="img/logo.png"> v' ?0                  	;0	<<0
135 90   ECHO/40                   ?0        16?10                ?0                  	;0
136 91   ECHO/40                   ?0        98:'					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="./js/jquery-3.5.1.min.js"></script>
	<script src="./js/bootstrap.bundle.min.js"></script>
	<script src="./js/owl.carousel.min.js"></script>
	<script src="./js/jquery.mousewheel.min.js"></script>
	<script src="./js/jquery.mcustomscrollbar.min.js"></script>
	<script src="./js/wnumb.js"></script>
	<script src="./js/nouislider.min.js"></script>
	<script src="./js/jquery.morelines.min.js"></script>
	<script src="./js/photoswipe.min.js"></script>
	<script src="./js/photoswipe-ui-default.min.js"></script>
    <script src="./js/glightbox.min.js"></script>
    <script src="./js/jBox.all.min.js"></script>
    <script src="./js/select2.min.js"></script>
    <script src="./js/jwplayer.js"></script>
    <script src="./js/jwplayer.core.controls.js"></script>
    <script src="./js/provider.hlsjs.js"></script>
	<script src="./js/main.js"></script>
    <script>
    $(document).ready(function () {
        ' ?0                  	;0
137 92   IS_NOT_EQUAL/18           #53=      16?2                 99:'profile'        	;0
138 92   JMPZ/43                   ?0        #53                  ?140                	;0	>>140
139 93   GOTO/253                  ?0        ?303                 ?100                	;0
140 95   ECHO/40                   ?0        101:'        $(\'#search__select\').select2({
            minimumResultsForSearch: -1
        });
        ' ?0                  	;0	<<138
141 96   GOTO/253                  ?0        ?302                 ?102                	;0
142 98   ECHO/40                   ?0        16?11                ?0                  	;0
143 99   ECHO/40                   ?0        103:'],
				format: wNumb({
					decimals: 1,
				})
			});

			var secondValues = [
				document.getElementById(\'filter__rating-start\'),
				document.getElementById(\'filter__rating-end\')
			];

			secondSlider.noUiSlider.on(\'update\', function( values, handle ) {
				secondValues[handle].innerHTML = values[handle];
			});

			$(\'.filter__item-menu--range\').on(\'click.bs.dropdown\', function (e) {
				e.stopPropagation();
				e.preventDefault();
			});
		} else {
			return false;
		}
		return false;
	}
	$(window).on(\'load\', initRatingSlider());
    ' ?0                  	;0
144 101  GOTO/253                  ?0        ?314                 ?104                	;0
145 103  GOTO/253                  ?0        ?41                  ?105                	;0
146 105  INIT_FCALL_BY_NAME/59     ?0        ?0                   106:'intval'        	;1
147 105  FETCH_DIM_FUNC_ARG/93     $54=      16?12                108:'id'            	;1
148 105  SEND_VAR_EX/66            ?80       $54                  ?1                  	;0
149 105  DO_FCALL_BY_NAME/131      $55=      ?0                   ?0                  	;0
150 105  ECHO/40                   ?0        $55                  ?0                  	;0
151 106  ECHO/40                   ?0        109:'&season=" + rSplit[rSplit.length-1];
        });
        ' ?0                  	;0
152 108  FETCH_STATIC_PROP_IS/176  $56=      110:'rRequest'       111:'XUI'           	;0
153 108  ISSET_ISEMPTY_DIM_OBJ/115 #57=      $56                  113:'season'        	;33554432
154 108  BOOL_NOT/13               #58=      #57                  ?0                  	;0
155 108  JMPZ/43                   ?0        #58                  ?157                	;0	>>157
156 109  GOTO/253                  ?0        ?313                 ?114                	;0
157 111  ECHO/40                   ?0        115:'        $(\'html,body\').animate({
            scrollTop: $(".seasons").offset().top - 90
        });
        ' ?0                  	;0	<<155
158 112  GOTO/253                  ?0        ?313                 ?116                	;0
159 114  ECHO/40                   ?0        117:'    }
    '    ?0                  	;0
160 116  ECHO/40                   ?0        118:'    
    $(document).ready(function () {
        ' ?0                  	;0
161 117  JMPZ/43                   ?0        16?4                 ?163                	;0	>>163
162 118  GOTO/253                  ?0        ?3                   ?119                	;0
163 120  IS_EQUAL/17               #59=      16?2                 120:'movie'         	;0	<<161
164 120  BOOL_NOT/13               #60=      #59                  ?0                  	;0
165 120  JMPZ/43                   ?0        #60                  ?167                	;0	>>167
166 121  GOTO/253                  ?0        ?2                   ?121                	;0
167 123  GOTO/253                  ?0        ?1                   ?122                	;0	<<165
168 125  ECHO/40                   ?0        123:'				step: 0.5,
                ' ?0                  	;0
169 127  ECHO/40                   ?0        124:'				connect: true,
				start: [' ?0                  	;0
170 128  ECHO/40                   ?0        16?13                ?0                  	;0
171 129  ECHO/40                   ?0        125:', '             ?0                  	;0
172 130  GOTO/253                  ?0        ?142                 ?126                	;0
173 132  IS_EQUAL/17               #61=      16?2                 127:'movie'         	;0
174 132  JMPZ/43                   ?0        #61                  ?176                	;0	>>176
175 133  GOTO/253                  ?0        ?178                 ?128                	;0
176 135  ECHO/40                   ?0        129:'            $("#episode_" + window.currentID).addClass("disabled");
            $("#episode_" + window.currentID + " ul").show();
            $("#player_row").slideUp(250, function() {
                $(\'html,body\').animate({
                    scrollTop: $(".seasons").offset().top - 90
                });
            });
            ' ?0                  	;0	<<174
177 136  GOTO/253                  ?0        ?306                 ?130                	;0
178 138  ECHO/40                   ?0        131:'            $("#player__error").html("Error - This movie is currently unavailable. Please try again later.");
            $("#player__error").slideDown(250);
            $("#player_row").slideUp(250);
            $(\'html,body\').animate({
                scrollTop: 0
            });
            ' ?0                  	;0
179 139  GOTO/253                  ?0        ?306                 ?132                	;0
180 141  ECHO/40                   ?0        133:'            var rCategories = JSON.parse(\'' ?0                  	;0
181 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   134:'str_replace'   	;3
182 142  SEND_VAL_EX/116           ?80       136:'\''             ?1                  	;0
183 142  SEND_VAL_EX/116           ?96       137:'\\\''           ?2                  	;0
184 142  INIT_FCALL_BY_NAME/59     ?0        ?0                   138:'json_encode'   	;1
185 142  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
186 142  DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
187 142  SEND_VAR_NO_REF_EX/50     ?112      $62                  ?3                  	;0
188 142  DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
189 142  ECHO/40                   ?0        $63                  ?0                  	;0
190 143  ECHO/40                   ?0        140:'\');
            window.location.href = \'./' ?0                  	;0
191 144  ECHO/40                   ?0        16?2                 ?0                  	;0
192 145  ECHO/40                   ?0        141:'?sort=\' + rSort[$("#filter__sort input").val()] + "&category=" + rCategories[$("#filter__genre input").val()] + "&rating_s=" + encodeURIComponent($("#filter__rating-start").html()) + "&rating_e=" + encodeURIComponent($("#filter__rating-end").html()) + "&year_s=" + encodeURIComponent($("#filter__years-start").html()) + "&year_e=" + encodeURIComponent($("#filter__years-end").html());
        });
        
        $(".clear__btn").click(function() {
            window.location.href = \'./' ?0                  	;0
193 146  GOTO/253                  ?0        ?273                 ?142                	;0
194 148  ECHO/40                   ?0        143:'?sort=\' + rSort[$("#filter__sort input").val()] + "&category=" + rCategories[$("#filter__genre input").val()] + "&filter=" + rFilter[$("#filter__filter input").val()];
        });
        
        $(".clear__btn").click(function() {
            window.location.href = \'./' ?0                  	;0
195 149  ECHO/40                   ?0        16?2                 ?0                  	;0
196 150  ECHO/40                   ?0        144:'\';
        });
    });
    ' ?0                  	;0
197 152  GOTO/253                  ?0        ?252                 ?145                	;0
198 153  GOTO/253                  ?0        ?113                 ?146                	;0
199 155  INIT_FCALL_BY_NAME/59     ?0        ?0                   147:'count'         	;1
200 155  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
201 155  DO_FCALL_BY_NAME/131      $64=      ?0                   ?0                  	;0
202 155  IS_SMALLER/19             #65=      149:0                $64                 	;0
203 155  BOOL_NOT/13               #66=      #65                  ?0                  	;0
204 155  JMPZ/43                   ?0        #66                  ?206                	;0	>>206
205 156  GOTO/253                  ?0        ?127                 ?150                	;0
206 158  ECHO/40                   ?0        151:'    window.updateTimer = null;
    window.XUI = window.XUI || {};
    window.XUI.Listings = window.XUI.Listings || {};
    window.XUI.Listings.DefaultChannels = "' ?0                  	;0	<<204
207 159  INIT_FCALL_BY_NAME/59     ?0        ?0                   152:'implode'       	;2
208 159  SEND_VAL_EX/116           ?80       154:','              ?1                  	;0
209 159  SEND_VAR_EX/66            ?96       16?14                ?2                  	;0
210 159  DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
211 159  ECHO/40                   ?0        $67                  ?0                  	;0
212 160  ECHO/40                   ?0        155:'";
    '       ?0                  	;0
213 161  IS_EQUAL/17               #68=      16?15                156:'epg'           	;0
214 161  JMPZ/43                   ?0        #68                  ?216                	;0	>>216
215 162  GOTO/253                  ?0        ?250                 ?157                	;0
216 164  GOTO/253                  ?0        ?248                 ?158                	;0	<<214
217 166  ECHO/40                   ?0        16?8                 ?0                  	;0
218 167  ECHO/40                   ?0        159:'/get.php?username=' ?0                  	;0
219 168  INIT_FCALL_BY_NAME/59     ?0        ?0                   160:'htmlentities'  	;1
220 168  FETCH_DIM_FUNC_ARG/93     $69=      16?6                 162:'username'      	;1
221 168  SEND_VAR_EX/66            ?80       $69                  ?1                  	;0
222 168  DO_FCALL_BY_NAME/131      $70=      ?0                   ?0                  	;0
223 168  ECHO/40                   ?0        $70                  ?0                  	;0
224 169  ECHO/40                   ?0        163:'&password='     ?0                  	;0
225 170  INIT_FCALL_BY_NAME/59     ?0        ?0                   164:'htmlentities'  	;1
226 170  FETCH_DIM_FUNC_ARG/93     $71=      16?6                 166:'password'      	;1
227 170  SEND_VAR_EX/66            ?80       $71                  ?1                  	;0
228 170  DO_FCALL_BY_NAME/131      $72=      ?0                   ?0                  	;0
229 170  ECHO/40                   ?0        $72                  ?0                  	;0
230 171  GOTO/253                  ?0        ?231                 ?167                	;0
231 173  ECHO/40                   ?0        168:'&type=" + decodeURIComponent($(\'#download_type\').val());
                ' ?0                  	;0
232 174  GOTO/253                  ?0        ?240                 ?169                	;0
233 176  ECHO/40                   ?0        170:'                rText = "' ?0                  	;0
234 177  ECHO/40                   ?0        16?8                 ?0                  	;0
235 178  GOTO/253                  ?0        ?333                 ?171                	;0
236 180  ECHO/40                   ?0        172:'    function openPlayer(rID = 0) {
        window.currentID = rID;
        var rPlayer = jwplayer("now__playing__player");
        rPlayer.setup({
            "file": window.rURLs[rID],
            "aspectratio": \'16:9\',
            "autostart": true,
            "width": \'100%\'
        });
        rPlayer.on(\'error\', showError);
        rPlayer.play();
        $("#player_row").slideDown(250, function() {
            $(\'html,body\').animate({
                scrollTop: $("#player_row").offset().top - 100
            });
        });
    }
    ' ?0                  	;0
237 181  GOTO/253                  ?0        ?239                 ?173                	;0
238 183  ECHO/40                   ?0        174:'    function openPlayer(rID = 0) {
        if (!$(".filter__btn").hasClass("disabled")) {
            window.currentID = rID;
            $("video source").last().attr("src", window.rURLs[rID]);
            $("video track").remove();
            $("video")[0].load();
            $("video")[0].play();
            $("#player_row").slideDown(250, function() {
                $(\'html,body\').animate({
                    scrollTop: $("#player_row").offset().top - 100
                });
            });
        }
    }
    ' ?0                  	;0
239 185  GOTO/253                  ?0        ?265                 ?175                	;0
240 188  FETCH_CONSTANT/99         #73=      ?0                   176:'PLATFORM'      	;16
241 188  IS_EQUAL/17               #74=      #73                  179:'xui'           	;0
242 188  BOOL_NOT/13               #75=      #74                  ?0                  	;0
243 188  JMPZ/43                   ?0        #75                  ?245                	;0	>>245
244 189  GOTO/253                  ?0        ?246                 ?180                	;0
245 191  ECHO/40                   ?0        181:'                if ($("#output_type").val()) {
                    if (rText.indexOf(\'?output=\') != -1) {
                        rText = rText + "&key=" + encodeURIComponent($("#output_type").val());
                    } else {
                        rText = rText + "?key=" + encodeURIComponent($("#output_type").val());
                    }
                }
                ' ?0                  	;0	<<243
246 193  ECHO/40                   ?0        182:'                $("#download_url").val(rText);
            } else {
                $("#download_url").val("");
            }
        });
        $("#download_type").trigger("change");
        $("#bouquet__form").submit(function(e){
            rOrder = [];
            $(\'#sort_bouquet option\').each(function() {
                rOrder.push($(this).val());
            });
            $("#bouquet_order_array").val(JSON.stringify(rOrder));
        });
    });
    ' ?0                  	;0
247 194  GOTO/253                  ?0        ?252                 ?183                	;0
248 196  ECHO/40                   ?0        184:'    window.XUI.Listings.HideEmpty = 0;
    ' ?0                  	;0
249 197  GOTO/253                  ?0        ?251                 ?185                	;0
250 199  ECHO/40                   ?0        186:'    window.XUI.Listings.HideEmpty = 1;
    ' ?0                  	;0
251 201  GOTO/253                  ?0        ?127                 ?187                	;0
252 204  ECHO/40                   ?0        188:'    </script>
    ' ?0                  	;0
253 205  IS_EQUAL/17               #76=      16?2                 189:'live'          	;0
254 205  JMPZ_EX/46                #76=      #76                  ?260                	;0	>>260
255 205  INIT_FCALL_BY_NAME/59     ?0        ?0                   190:'count'         	;1
256 205  SEND_VAR_EX/66            ?80       16?14                ?1                  	;0
257 205  DO_FCALL_BY_NAME/131      $77=      ?0                   ?0                  	;0
258 205  IS_SMALLER/19             #78=      192:0                $77                 	;0
259 205  BOOL/52                   #76=      #78                  ?0                  	;0
260 205  BOOL_NOT/13               #79=      #76                  ?0                  	;0	<<254
261 205  JMPZ/43                   ?0        #79                  ?263                	;0	>>263
262 206  GOTO/253                  ?0        ?264                 ?193                	;0
263 208  ECHO/40                   ?0        194:'    <script src="./js/listings.js"></script>
    ' ?0                  	;0	<<261
264 210  GOTO/253                  ?0        ?347                 ?195                	;0
265 213  ECHO/40                   ?0        196:'    
    '     ?0                  	;0
266 214  JMPZ/43                   ?0        16?4                 ?268                	;0	>>268
267 215  GOTO/253                  ?0        ?160                 ?197                	;0
268 217  ECHO/40                   ?0        198:'    function showError(rError) {
        ' ?0                  	;0	<<266
269 218  IS_EQUAL/17               #80=      16?2                 199:'movie'         	;0
270 218  JMPZ/43                   ?0        #80                  ?272                	;0	>>272
271 219  GOTO/253                  ?0        ?7                   ?200                	;0
272 221  GOTO/253                  ?0        ?5                   ?201                	;0	<<270
273 223  ECHO/40                   ?0        16?2                 ?0                  	;0
274 224  ECHO/40                   ?0        202:'\';
        });
    });
    
    function initYearSlider() {
		if ($(\'#filter__years\').length) {
			var firstSlider = document.getElementById(\'filter__years\');
            var d = new Date();
            var rYear = d.getFullYear();
			noUiSlider.create(firstSlider, {
				range: {
					\'min\': 1900,
					\'max\': rYear
				},
				step: 1,
				connect: true,
				start: [' ?0                  	;0
275 225  ECHO/40                   ?0        16?16                ?0                  	;0
276 226  ECHO/40                   ?0        203:', '             ?0                  	;0
277 227  ECHO/40                   ?0        16?17                ?0                  	;0
278 228  GOTO/253                  ?0        ?34                  ?204                	;0
279 231  INIT_FCALL_BY_NAME/59     ?0        ?0                   205:'strtoupper'    	;1
280 231  INIT_FCALL_BY_NAME/59     ?0        ?0                   207:'str_replace'   	;3
281 231  SEND_VAL_EX/116           ?80       209:'"'              ?1                  	;0
282 231  SEND_VAL_EX/116           ?96       210:'\\"'            ?2                  	;0
283 231  SEND_VAR_EX/66            ?112      16?9                 ?3                  	;0
284 231  DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
285 231  SEND_VAR_NO_REF_EX/50     ?80       $81                  ?1                  	;0
286 231  DO_FCALL_BY_NAME/131      $82=      ?0                   ?0                  	;0
287 231  ECHO/40                   ?0        $82                  ?0                  	;0
288 233  ECHO/40                   ?0        211:'");
            $("#now__playing__epg").html("No Programme Information...");
            $("#now__playing__text").html("");
            
            var rPlayer = jwplayer("now__playing__player");
            rPlayer.stop();
        });
    }
    
    function updateChannel(rID) {
        $.getJSON("listings.php?id=" + encodeURIComponent(rID), function(rData) {
            $("#now__playing__title").html(rData.title);
            $("#now__playing__epg").html(rData.epg_title);
            $("#now__playing__text").html(rData.epg_description);
            window.updateTimer = setTimeout(updateChannel, 60000, rID);
        });
    }

    $(document).ready(function () {
        $(".filter__btn").click(function() {
            var rSort = JSON.parse(\'' ?0                  	;0
289 234  INIT_FCALL_BY_NAME/59     ?0        ?0                   212:'str_replace'   	;3
290 234  SEND_VAL_EX/116           ?80       214:'\''             ?1                  	;0
291 234  SEND_VAL_EX/116           ?96       215:'\\\''           ?2                  	;0
292 234  INIT_FCALL_BY_NAME/59     ?0        ?0                   216:'json_encode'   	;1
293 234  INIT_FCALL_BY_NAME/59     ?0        ?0                   218:'array_flip'    	;1
294 234  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
295 234  DO_FCALL_BY_NAME/131      $83=      ?0                   ?0                  	;0
296 234  SEND_VAR_NO_REF_EX/50     ?80       $83                  ?1                  	;0
297 234  DO_FCALL_BY_NAME/131      $84=      ?0                   ?0                  	;0
298 234  SEND_VAR_NO_REF_EX/50     ?112      $84                  ?3                  	;0
299 234  DO_FCALL_BY_NAME/131      $85=      ?0                   ?0                  	;0
300 234  ECHO/40                   ?0        $85                  ?0                  	;0
301 235  GOTO/253                  ?0        ?316                 ?220                	;0
302 237  GOTO/253                  ?0        ?304                 ?221                	;0
303 239  ECHO/40                   ?0        222:'        $(\'select\').select2({
            minimumResultsForSearch: -1
        });
        ' ?0                  	;0
304 241  ECHO/40                   ?0        223:'        $("#search__button").click(function() {
            var rSearch = $("#search__input").val();
            var rOption = $("#search__select").val();
            window.location.href = rOption + "?search=" + encodeURIComponent(rSearch);
        });
    });
    ' ?0                  	;0
305 242  GOTO/253                  ?0        ?92                  ?224                	;0
306 245  ECHO/40                   ?0        225:'        });
        ' ?0                  	;0
307 247  IS_EQUAL/17               #86=      16?2                 226:'episodes'      	;0
308 247  BOOL_NOT/13               #87=      #86                  ?0                  	;0
309 247  JMPZ/43                   ?0        #87                  ?311                	;0	>>311
310 248  GOTO/253                  ?0        ?152                 ?227                	;0
311 250  ECHO/40                   ?0        228:'        $("#season__select").change(function() {
            var rSplit = $(this).val().split(" ");
            window.location.href = "episodes?id=' ?0                  	;0	<<309
312 251  GOTO/253                  ?0        ?146                 ?229                	;0
313 254  ECHO/40                   ?0        230:'    });
    '  ?0                  	;0
314 256  GOTO/253                  ?0        ?197                 ?231                	;0
315 258  GOTO/253                  ?0        ?199                 ?232                	;0
316 260  ECHO/40                   ?0        233:'\');
            ' ?0                  	;0
317 261  ASSIGN/38                 ?70       16?1                 234:array (
)       	;0
318 262  INIT_STATIC_METHOD_CALL/113 ?0        235:'XUI'            237:'D15DCE7A49f71feA'	;2
319 262  FETCH_DIM_FUNC_ARG/93     $89=      16?6                 239:'category_ids'  	;1
320 262  SEND_VAR_EX/66            ?80       $89                  ?1                  	;0
321 262  SEND_VAR_EX/66            ?96       16?2                 ?2                  	;0
322 262  DO_FCALL/60               $90=      ?0                   ?0                  	;0
323 262  FE_RESET_R/77             $91=      $90                  ?330                	;0
324 262  FE_FETCH_R/78             ?0        $91                  16?7                	;330	>>330	<<329
325 263  FETCH_DIM_R/81            $92=      16?7                 240:'title'         	;0
326 263  FETCH_DIM_R/81            $94=      16?7                 241:'id'            	;0
327 263  ASSIGN_DIM/147            ?75       16?1                 $92                 	;0
328 263  OP_DATA/137               ?0        $94                  ?0                  	;0
329 264  JMP/42                    ?0        ?324                 ?0                  	;0	>>324
330 264  FE_FREE/127               ?0        $91                  ?0                  	;0	<<323
331 267  ECHO/40                   ?0        242:'            var rFilter = JSON.parse(\'' ?0                  	;0
332 268  GOTO/253                  ?0        ?9                   ?243                	;0
333 270  ECHO/40                   ?0        244:'/playlist/'     ?0                  	;0
334 271  INIT_FCALL_BY_NAME/59     ?0        ?0                   245:'htmlentities'  	;1
335 271  FETCH_DIM_FUNC_ARG/93     $95=      16?6                 247:'username'      	;1
336 271  SEND_VAR_EX/66            ?80       $95                  ?1                  	;0
337 271  DO_FCALL_BY_NAME/131      $96=      ?0                   ?0                  	;0
338 271  ECHO/40                   ?0        $96                  ?0                  	;0
339 272  ECHO/40                   ?0        248:'/'              ?0                  	;0
340 273  INIT_FCALL_BY_NAME/59     ?0        ?0                   249:'htmlentities'  	;1
341 273  FETCH_DIM_FUNC_ARG/93     $97=      16?6                 251:'password'      	;1
342 273  SEND_VAR_EX/66            ?80       $97                  ?1                  	;0
343 273  DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
344 273  ECHO/40                   ?0        $98                  ?0                  	;0
345 274  ECHO/40                   ?0        252:'/" + decodeURIComponent($(\'#download_type\').val());
                ' ?0                  	;0
346 275  GOTO/253                  ?0        ?240                 ?253                	;0
347 277  ECHO/40                   ?0        254:'</body>
</html>' ?0                  	;0
348 278  NOP/0                     ?0        255:1                ?0                  	;4294967295
*/

?>