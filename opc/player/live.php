<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?134                 ?0                  	;0	>>134
1   5    ECHO/40                   ?0        1:'">
									<span></span>
								</div>
								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-archive">
                                    ' ?0                  	;0
2   6    FE_RESET_R/77             $20=      16?0                 ?9                  	;0
3   6    FE_FETCH_R/78             #21=      $20                  16?1                	;9	>>9	<<8
4   6    ASSIGN/38                 ?2        16?2                 #21                 	;0
5   7    ECHO/40                   ?0        2:'									<li>'    ?0                  	;0
6   8    ECHO/40                   ?0        16?1                 ?0                  	;0
7   9    ECHO/40                   ?0        3:'</li>
                                    ' ?0                  	;0
8   10   JMP/42                    ?0        ?3                   ?0                  	;0	>>3
9   10   FE_FREE/127               ?0        $20                  ?0                  	;0	<<2
10  13   ECHO/40                   ?0        4:'								</ul>
							</div>
							<div class="filter__item" id="filter__sort">
								<span class="filter__item-label">SORT:</span>
								<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-quality" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <input type="button" value="' ?0                  	;0
11  14   ISSET_ISEMPTY_CV/197      #23=      16?3                 ?0                  	;33554432
12  14   JMPZ/43                   ?0        #23                  ?16                 	;0	>>16
13  14   FETCH_DIM_R/81            $24=      16?4                 16?3                	;0
14  14   QM_ASSIGN/22              #25=      $24                  ?0                  	;0
15  14   JMP/42                    ?0        ?17                  ?0                  	;0	>>17
16  14   QM_ASSIGN/22              #25=      5:'Date Added'       ?0                  	;0	<<12
17  14   ECHO/40                   ?0        #25                  ?0                  	;0	<<15
18  15   GOTO/253                  ?0        ?241                 ?6                  	;0
19  17   ASSIGN/38                 ?6        16?0                 7:array (
  'all' => 'All Channels',
  'timeshift' => 'Timeshift Only',
  'epg' => 'Has EPG Only',
)	;0
20  18   FETCH_STATIC_PROP_R/173   $27=      8:'rRequest'         9:'XUI'             	;0
21  18   FETCH_DIM_R/81            $28=      $27                  11:'filter'         	;0
22  18   ISSET_ISEMPTY_DIM_OBJ/115 #29=      16?0                 $28                 	;33554432
23  18   JMPZ/43                   ?0        #29                  ?28                 	;0	>>28
24  18   FETCH_STATIC_PROP_R/173   $30=      12:'rRequest'        13:'XUI'            	;0
25  18   FETCH_DIM_R/81            $31=      $30                  15:'filter'         	;0
26  18   QM_ASSIGN/22              #32=      $31                  ?0                  	;0
27  18   JMP/42                    ?0        ?29                  ?0                  	;0	>>29
28  18   QM_ASSIGN/22              #32=      16:'all'             ?0                  	;0	<<23
29  18   ASSIGN/38                 ?13       16?5                 #32                 	;0	<<27
30  19   INIT_ARRAY/71             #34=      16?5                 17:'filter'         	;6
31  19   ASSIGN/38                 ?15       16?6                 #34                 	;0
32  20   ASSIGN/38                 ?16       16?4                 18:array (
  'number' => 'Default',
  'name' => 'Name A-Z',
  'added' => 'Date Added',
)	;0
33  21   FETCH_STATIC_PROP_R/173   $37=      19:'rRequest'        20:'XUI'            	;0
34  21   FETCH_DIM_R/81            $38=      $37                  22:'sort'           	;0
35  21   ISSET_ISEMPTY_DIM_OBJ/115 #39=      16?4                 $38                 	;33554432
36  21   JMPZ/43                   ?0        #39                  ?41                 	;0	>>41
37  21   FETCH_STATIC_PROP_R/173   $40=      23:'rRequest'        24:'XUI'            	;0
38  21   FETCH_DIM_R/81            $41=      $40                  26:'sort'           	;0
39  21   QM_ASSIGN/22              #42=      $41                  ?0                  	;0
40  21   JMP/42                    ?0        ?42                  ?0                  	;0	>>42
41  21   QM_ASSIGN/22              #42=      27:'number'          ?0                  	;0	<<36
42  21   ASSIGN/38                 ?23       16?3                 #42                 	;0	<<40
43  22   GOTO/253                  ?0        ?204                 ?28                 	;0
44  24   ECHO/40                   ?0        29:'	<div class="catalog details' ?0                  	;0
45  25   BOOL_NOT/13               #44=      16?7                 ?0                  	;0
46  25   JMPZ/43                   ?0        #44                  ?48                 	;0	>>48
47  26   GOTO/253                  ?0        ?49                  ?30                 	;0
48  28   ECHO/40                   ?0        31:' top-margin-med' ?0                  	;0	<<46
49  30   ECHO/40                   ?0        32:'">
		<div class="container">
			<div class="row">
                <div class="col-12">
                    ' ?0                  	;0
50  31   GOTO/253                  ?0        ?252                 ?33                 	;0
51  34   FETCH_CONSTANT/99         #45=      ?0                   34:'PLATFORM'       	;16
52  34   IS_EQUAL/17               #46=      #45                  37:'xui'            	;0
53  34   JMPZ/43                   ?0        #46                  ?55                 	;0	>>55
54  35   GOTO/253                  ?0        ?59                  ?38                 	;0
55  37   INIT_METHOD_CALL/112      ?0        16?8                 39:'query'          	;1	<<53
56  37   SEND_VAL_EX/116           ?80       41:'SELECT `movie_propeties` AS `movie_properties` FROM `streams` WHERE `movie_propeties` IS NOT NULL AND `type` = 2 ORDER BY RAND() LIMIT 5;' ?1                  	;0
57  37   DO_FCALL/60               ?27       ?0                   ?0                  	;0
58  38   GOTO/253                  ?0        ?63                  ?42                 	;0
59  40   GOTO/253                  ?0        ?60                  ?43                 	;0
60  42   INIT_METHOD_CALL/112      ?0        16?8                 44:'query'          	;1
61  42   SEND_VAL_EX/116           ?80       46:'SELECT `movie_properties` FROM `streams` WHERE `movie_properties` IS NOT NULL AND `type` = 2 ORDER BY RAND() LIMIT 5;' ?1                  	;0
62  42   DO_FCALL/60               ?28       ?0                   ?0                  	;0
63  44   ASSIGN/38                 ?29       16?9                 47:''               	;0
64  45   INIT_METHOD_CALL/112      ?0        16?8                 48:'get_rows'       	;0
65  45   DO_FCALL/60               $50=      ?0                   ?0                  	;0
66  45   FE_RESET_R/77             $51=      $50                  ?88                 	;0
67  45   FE_FETCH_R/78             ?0        $51                  16?10               	;88	>>88	<<87
68  46   INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'json_decode'    	;2
69  46   FETCH_DIM_FUNC_ARG/93     $52=      16?10                52:'movie_properties'	;1
70  46   SEND_VAR_EX/66            ?80       $52                  ?1                  	;0
71  46   SEND_VAL_EX/116           ?96       53:true              ?2                  	;0
72  46   DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
73  46   ASSIGN/38                 ?34       16?11                $53                 	;0
74  47   FETCH_DIM_IS/90           $55=      16?11                54:'backdrop_path'  	;0
75  47   ISSET_ISEMPTY_DIM_OBJ/115 #56=      $55                  55:0                	;16777216
76  47   JMPZ/43                   ?0        #56                  ?79                 	;0	>>79
77  48   NOP/0                     ?0        ?0                   ?0                  	;1
78  48   GOTO/253                  ?0        ?87                  ?56                 	;0
79  50   INIT_STATIC_METHOD_CALL/113 ?0        57:'XUI'             59:'fcA722697178454B'	;1	<<76
80  50   FETCH_DIM_FUNC_ARG/93     $57=      16?11                61:'backdrop_path'  	;1
81  50   FETCH_DIM_FUNC_ARG/93     $58=      $57                  62:0                	;1
82  50   SEND_VAR_EX/66            ?80       $58                  ?1                  	;0
83  50   DO_FCALL/60               $59=      ?0                   ?0                  	;0
84  50   ASSIGN/38                 ?40       16?9                 $59                 	;0
85  51   FE_FREE/127               ?0        $51                  ?1                  	;1
86  51   GOTO/253                  ?0        ?89                  ?63                 	;0
87  53   JMP/42                    ?0        ?67                  ?0                  	;0	>>67
88  53   FE_FREE/127               ?0        $51                  ?0                  	;0	<<66
89  56   GOTO/253                  ?0        ?198                 ?64                 	;0
90  58   INIT_FCALL_BY_NAME/59     ?0        ?0                   65:'strtoupper'     	;1
91  58   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'htmlspecialchars'	;1
92  58   SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
93  58   DO_FCALL_BY_NAME/131      $61=      ?0                   ?0                  	;0
94  58   SEND_VAR_NO_REF_EX/50     ?80       $61                  ?1                  	;0
95  58   DO_FCALL_BY_NAME/131      $62=      ?0                   ?0                  	;0
96  58   JMP_SET/152               #63=      $62                  ?98                 	;0
97  58   QM_ASSIGN/22              #63=      69:'LIVE TV'         ?0                  	;0
98  58   ECHO/40                   ?0        #63                  ?0                  	;0
99  59   ECHO/40                   ?0        70:'</h2>
                        <button onClick="closeChannel();" class="close__btn" type="button" style="display: none;">CLOSE</button>
					</div>
                    <span id="now__playing__box" style="display: none;">
                        <h3 class="card__title" id="now__playing__epg"></h3>
                        <span class="card__rate" id="now__playing__text"></span>
                        <div id="now__playing__player"></div>
                    </span>
				</div>
			</div>
		</div>
	</section>
    ' ?0                  	;0
100 60   JMPZ/43                   ?0        16?7                 ?102                	;0	>>102
101 61   GOTO/253                  ?0        ?251                 ?71                 	;0
102 63   ECHO/40                   ?0        72:'	<div class="filter">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="filter__content">
						<div class="filter__items">
							<div class="filter__item" id="filter__genre">
								<span class="filter__item-label">CATEGORY:</span>
								<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-genre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<input type="button" value="' ?0                  	;0	<<100
103 64   ISSET_ISEMPTY_CV/197      #64=      16?12                ?0                  	;16777216
104 64   BOOL_NOT/13               #65=      #64                  ?0                  	;0
105 64   JMPZ/43                   ?0        #65                  ?111                	;0	>>111
106 64   FETCH_STATIC_PROP_R/173   $66=      73:'rCategories'     74:'XUI'            	;0
107 64   FETCH_DIM_R/81            $67=      $66                  16?12               	;0
108 64   FETCH_DIM_R/81            $68=      $67                  76:'category_name'  	;0
109 64   QM_ASSIGN/22              #69=      $68                  ?0                  	;0
110 64   JMP/42                    ?0        ?114                 ?0                  	;0	>>114
111 64   FETCH_DIM_R/81            $70=      16?13                77:0                	;0	<<105
112 64   FETCH_DIM_R/81            $71=      $70                  78:'title'          	;0
113 64   QM_ASSIGN/22              #69=      $71                  ?0                  	;0
114 64   ECHO/40                   ?0        #69                  ?0                  	;0	<<110
115 65   GOTO/253                  ?0        ?116                 ?79                 	;0
116 67   ECHO/40                   ?0        80:'">
									<span></span>
								</div>
								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-genre">
                                    ' ?0                  	;0
117 68   FE_RESET_R/77             $72=      16?13                ?124                	;0
118 68   FE_FETCH_R/78             ?0        $72                  16?14               	;124	>>124	<<123
119 69   ECHO/40                   ?0        81:'									<li>'   ?0                  	;0
120 70   FETCH_DIM_R/81            $73=      16?14                82:'title'          	;0
121 70   ECHO/40                   ?0        $73                  ?0                  	;0
122 71   ECHO/40                   ?0        83:'</li>
                                    ' ?0                  	;0
123 72   JMP/42                    ?0        ?118                 ?0                  	;0	>>118
124 72   FE_FREE/127               ?0        $72                  ?0                  	;0	<<117
125 75   ECHO/40                   ?0        84:'								</ul>
							</div>
							<div class="filter__item" id="filter__filter">
								<span class="filter__item-label">FILTER:</span>
								<div class="filter__item-btn dropdown-toggle" role="navigation" id="filter-archive" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <input type="button" value="' ?0                  	;0
126 76   ISSET_ISEMPTY_CV/197      #74=      16?5                 ?0                  	;33554432
127 76   JMPZ/43                   ?0        #74                  ?131                	;0	>>131
128 76   FETCH_DIM_R/81            $75=      16?0                 16?5                	;0
129 76   QM_ASSIGN/22              #76=      $75                  ?0                  	;0
130 76   JMP/42                    ?0        ?132                 ?0                  	;0	>>132
131 76   QM_ASSIGN/22              #76=      85:'All Channels'    ?0                  	;0	<<127
132 76   ECHO/40                   ?0        #76                  ?0                  	;0	<<130
133 77   GOTO/253                  ?0        ?1                   ?86                 	;0
134 79   INCLUDE_OR_EVAL/73        ?57       87:'functions.php'   ?0                  	;2	<<0
135 80   FETCH_CONSTANT/99         #78=      ?0                   88:'PLATFORM'       	;16
136 80   IS_EQUAL/17               #79=      #78                  91:'xui'            	;0
137 80   JMPZ_EX/46                #79=      #79                  ?149                	;0	>>149
138 80   INIT_FCALL_BY_NAME/59     ?0        ?0                   92:'in_array'       	;2
139 80   SEND_VAL_EX/116           ?80       94:1                 ?1                  	;0
140 80   FETCH_DIM_FUNC_ARG/93     $80=      16?15                95:'allowed_outputs'	;2
141 80   SEND_VAR_EX/66            ?96       $80                  ?2                  	;0
142 80   DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
143 80   BOOL_NOT/13               #82=      $81                  ?0                  	;0
144 80   JMPNZ_EX/47               #82=      #82                  ?148                	;0	>>148
145 80   FETCH_STATIC_PROP_R/173   $83=      96:'rSettings'       97:'XUI'            	;0
146 80   FETCH_DIM_R/81            $84=      $83                  99:'disable_hls'    	;0
147 80   BOOL/52                   #82=      $84                  ?0                  	;0
148 80   BOOL/52                   #79=      #82                  ?0                  	;0	<<144
149 80   BOOL_NOT/13               #85=      #79                  ?0                  	;0	<<137
150 80   JMPZ/43                   ?0        #85                  ?152                	;0	>>152
151 81   GOTO/253                  ?0        ?155                 ?100                	;0
152 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   101:'header'        	;1	<<150
153 83   SEND_VAL_EX/116           ?80       103:'Location: index.php' ?1                  	;0
154 83   DO_FCALL_BY_NAME/131      ?66       ?0                   ?0                  	;0
155 85   INIT_STATIC_METHOD_CALL/113 ?0        104:'XUI'            106:'D15dCe7a49f71FeA'	;2
156 85   FETCH_DIM_FUNC_ARG/93     $87=      16?15                108:'category_ids'  	;1
157 85   SEND_VAR_EX/66            ?80       $87                  ?1                  	;0
158 85   SEND_VAL_EX/116           ?96       109:'live'           ?2                  	;0
159 85   DO_FCALL/60               $88=      ?0                   ?0                  	;0
160 85   ASSIGN/38                 ?69       16?13                $88                 	;0
161 86   GOTO/253                  ?0        ?19                  ?110                	;0
162 89   BOOL_NOT/13               #90=      16?7                 ?0                  	;0
163 89   JMPZ/43                   ?0        #90                  ?165                	;0	>>165
164 90   GOTO/253                  ?0        ?51                  ?111                	;0
165 92   INIT_METHOD_CALL/112      ?0        16?8                 112:'query'         	;2	<<163
166 92   INIT_FCALL_BY_NAME/59     ?0        ?0                   114:'implode'       	;2
167 92   SEND_VAL_EX/116           ?80       116:','              ?1                  	;0
168 92   FETCH_DIM_FUNC_ARG/93     $91=      16?15                117:'live_ids'      	;2
169 92   SEND_VAR_EX/66            ?96       $91                  ?2                  	;0
170 92   DO_FCALL_BY_NAME/131      $92=      ?0                   ?0                  	;0
171 92   CONCAT/8                  #93=      118:'SELECT DISTINCT(`streams`.`id`) FROM `epg_data` LEFT JOIN `streams` ON `streams`.`epg_id` = `epg_data`.`epg_id` AND `streams`.`channel_id` = `epg_data`.`channel_id` WHERE `epg_data`.`title` LIKE ? AND `streams`.`id` IN (' $92                 	;0
172 92   CONCAT/8                  #94=      #93                  119:') AND (`start` <= UNIX_TIMESTAMP() AND `end` > UNIX_TIMESTAMP()) ORDER BY `epg_data`.`title` ASC;'	;0
173 92   SEND_VAL_EX/116           ?80       #94                  ?1                  	;0
174 92   CONCAT/8                  #95=      120:'%'              16?7                	;0
175 92   CONCAT/8                  #96=      #95                  121:'%'             	;0
176 92   SEND_VAL_EX/116           ?96       #96                  ?2                  	;0
177 92   DO_FCALL/60               ?77       ?0                   ?0                  	;0
178 93   INIT_METHOD_CALL/112      ?0        16?8                 122:'get_rows'      	;0
179 93   DO_FCALL/60               $98=      ?0                   ?0                  	;0
180 93   FE_RESET_R/77             $99=      $98                  ?194                	;0
181 93   FE_FETCH_R/78             ?0        $99                  16?16               	;194	>>194	<<193
182 94   INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'in_array'      	;2
183 94   FETCH_DIM_FUNC_ARG/93     $100=     16?16                126:'id'            	;1
184 94   SEND_VAR_EX/66            ?80       $100                 ?1                  	;0
185 94   SEND_VAR_EX/66            ?96       16?17                ?2                  	;0
186 94   DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
187 94   JMPZ/43                   ?0        $101                 ?190                	;0	>>190
188 95   NOP/0                     ?0        ?0                   ?0                  	;1
189 95   GOTO/253                  ?0        ?193                 ?127                	;0
190 97   FETCH_DIM_R/81            $103=     16?16                128:'id'            	;0	<<187
191 97   ASSIGN_DIM/147            ?82       16?17                ?4397406            	;0
192 97   OP_DATA/137               ?0        $103                 ?0                  	;0
193 99   JMP/42                    ?0        ?181                 ?0                  	;0	>>181
194 99   FE_FREE/127               ?0        $99                  ?0                  	;0	<<180
195 102  GOTO/253                  ?0        ?51                  ?129                	;0
196 105  ECHO/40                   ?0        130:'                </div>
			</div>
		</div>
	</div>
' ?0                  	;0
197 106  GOTO/253                  ?0        ?262                 ?131                	;0
198 108  ASSIGN/38                 ?84       16?18                132:'Live TV'       	;0
199 109  INCLUDE_OR_EVAL/73        ?85       133:'header.php'     ?0                  	;2
200 110  ECHO/40                   ?0        134:'	<section class="section section--first">
        <div class="details__bg" data-bg="' ?0                  	;0
201 111  ECHO/40                   ?0        16?9                 ?0                  	;0
202 112  ECHO/40                   ?0        135:'"></div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section__wrap">
						<h2 class="section__title" id="now__playing__title">' ?0                  	;0
203 113  GOTO/253                  ?0        ?90                  ?136                	;0
204 115  INIT_FCALL_BY_NAME/59     ?0        ?0                   137:'intval'        	;1
205 115  FETCH_STATIC_PROP_FUNC_ARG/177 $106=     139:'rRequest'       140:'XUI'           	;1
206 115  FETCH_DIM_FUNC_ARG/93     $107=     $106                 142:'category'      	;1
207 115  SEND_VAR_EX/66            ?80       $107                 ?1                  	;0
208 115  DO_FCALL_BY_NAME/131      $108=     ?0                   ?0                  	;0
209 115  JMP_SET/152               #109=     $108                 ?213                	;0
210 115  FETCH_DIM_R/81            $110=     16?13                143:0               	;0
211 115  FETCH_DIM_R/81            $111=     $110                 144:'id'            	;0
212 115  QM_ASSIGN/22              #109=     $111                 ?0                  	;0
213 115  ASSIGN/38                 ?92       16?12                #109                	;0
214 116  FETCH_STATIC_PROP_R/173   $113=     145:'rRequest'       146:'XUI'           	;0
215 116  FETCH_DIM_R/81            $114=     $113                 148:'search'        	;0
216 116  JMP_SET/152               #115=     $114                 ?218                	;0
217 116  QM_ASSIGN/22              #115=     149:NULL             ?0                  	;0
218 116  ASSIGN/38                 ?96       16?7                 #115                	;0
219 117  ASSIGN/38                 ?97       16?17                150:array (
)       	;0
220 118  INIT_STATIC_METHOD_CALL/113 ?0        151:'XUI'            153:'Ca290dC77e86b74B'	;10
221 118  SEND_VAR_EX/66            ?80       16?15                ?1                  	;0
222 118  SEND_VAL_EX/116           ?96       155:array (
  0 => 'live',
  1 => 'created_live',
) ?2                  	;0
223 118  SEND_VAR_EX/66            ?112      16?12                ?3                  	;0
224 118  SEND_VAL_EX/116           ?128      156:NULL             ?4                  	;0
225 118  SEND_VAR_EX/66            ?144      16?3                 ?5                  	;0
226 118  SEND_VAR_EX/66            ?160      16?7                 ?6                  	;0
227 118  SEND_VAR_EX/66            ?176      16?6                 ?7                  	;0
228 118  SEND_VAL_EX/116           ?192      157:NULL             ?8                  	;0
229 118  SEND_VAL_EX/116           ?208      158:NULL             ?9                  	;0
230 118  SEND_VAL_EX/116           ?224      159:true             ?10                 	;0
231 118  DO_FCALL/60               $118=     ?0                   ?0                  	;0
232 118  ASSIGN/38                 ?99       16?19                $118                	;0
233 119  FE_RESET_R/77             $120=     16?19                ?239                	;0
234 119  FE_FETCH_R/78             ?0        $120                 16?10               	;239	>>239	<<238
235 120  FETCH_DIM_R/81            $122=     16?10                160:'id'            	;0
236 120  ASSIGN_DIM/147            ?101      16?17                ?10                 	;0
237 120  OP_DATA/137               ?0        $122                 ?0                  	;0
238 121  JMP/42                    ?0        ?234                 ?0                  	;0	>>234
239 121  FE_FREE/127               ?0        $120                 ?0                  	;0	<<233
240 123  GOTO/253                  ?0        ?162                 ?161                	;0
241 125  ECHO/40                   ?0        162:'">
									<span></span>
								</div>
								<ul class="filter__item-menu dropdown-menu scrollbar-dropdown" aria-labelledby="filter-quality">
                                    ' ?0                  	;0
242 126  FE_RESET_R/77             $123=     16?4                 ?249                	;0
243 126  FE_FETCH_R/78             #124=     $123                 16?1                	;249	>>249	<<248
244 126  ASSIGN/38                 ?105      16?2                 #124                	;0
245 127  ECHO/40                   ?0        163:'									<li>'  ?0                  	;0
246 128  ECHO/40                   ?0        16?1                 ?0                  	;0
247 129  ECHO/40                   ?0        164:'</li>
                                    ' ?0                  	;0
248 130  JMP/42                    ?0        ?243                 ?0                  	;0	>>243
249 130  FE_FREE/127               ?0        $123                 ?0                  	;0	<<242
250 133  ECHO/40                   ?0        165:'								</ul>
							</div>
						</div>
                        <div>
                            <button class="filter__btn" type="button">filter</button>
                            <button class="clear__btn" type="button">X</button>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
    ' ?0                  	;0
251 135  GOTO/253                  ?0        ?44                  ?166                	;0
252 137  INIT_FCALL_BY_NAME/59     ?0        ?0                   167:'count'         	;1
253 137  SEND_VAR_EX/66            ?80       16?17                ?1                  	;0
254 137  DO_FCALL_BY_NAME/131      $126=     ?0                   ?0                  	;0
255 137  IS_SMALLER/19             #127=     169:0                $126                	;0
256 137  JMPZ/43                   ?0        #127                 ?258                	;0	>>258
257 138  GOTO/253                  ?0        ?260                 ?170                	;0
258 140  ECHO/40                   ?0        171:'                    <div class="results_form">
                        <div class="row">
                            <div class="col-12">
                                <h4 class="results__error">No Live Channels or Programmes have been found matching your search terms.</h4>
                            </div>
                        </div>
                    </div>
                    ' ?0                  	;0	<<256
259 141  GOTO/253                  ?0        ?196                 ?172                	;0
260 143  ECHO/40                   ?0        173:'                    <div class="listings-grid-container">
                        <a href="#" class="listings-direction-link left day-nav-arrow js-day-nav-arrow" data-direction="prev"><span class="isvg isvg-left-dir"></span></a>
                        <a href="#" class="listings-direction-link right day-nav-arrow js-day-nav-arrow" data-direction="next"><span class="isvg isvg-right-dir"></span></a>
                        <div class="listings-day-slider-wrapper">
                            <div class="listings-day-slider js-listings-day-slider">
                                <div class="js-listings-day-nav-inner"></div>
                            </div>
                        </div>
                        <div class="js-billboard-fix-point"></div>
                        <div class="listings-grid-inner">
                            <div class="time-nav-bar cf js-time-nav-bar">
                                <div class="listings-mobile-nav">
                                    <a class="listings-now-btn js-now-btn" href="#">NOW</a>
                                </div>
                                <div class="listings-times-wrapper">
                                    <a href="#" class="listings-direction-link left js-time-nav-arrow" data-direction="prev"><span class="isvg isvg-left-dir"></span></a>
                                    <a href="#" class="listings-direction-link right js-time-nav-arrow" data-direction="next"><span class="isvg isvg-right-dir"></span></a>
                                    <div class="times-slider js-times-slider"></div>
                                </div>
                                <div class="listings-loader js-listings-loader"><span class="isvg isvg-loader animate-spin"></span></div>
                            </div>
                            <div class="listings-wrapper cf js-listings-wrapper">
                                <div class="listings-timeline js-listings-timeline"></div>
                                <div class="js-listings-container"></div>
                            </div>
                        </div>
                    </div>
                    ' ?0                  	;0
261 144  GOTO/253                  ?0        ?196                 ?174                	;0
262 146  INCLUDE_OR_EVAL/73        ?108      175:'footer.php'     ?0                  	;2
263 147  NOP/0                     ?0        176:1                ?0                  	;4294967295
*/

?>