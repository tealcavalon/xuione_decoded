<?php


function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   183  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   183  BIND_GLOBAL/168           ?0        16?1                 1:'F2db9d2971f5c8c4'	;0
	2   184  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'is_object'       	;1
	3   184  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	4   184  DO_FCALL_BY_NAME/131      $2=       ?0                   ?0                  	;0
	5   184  BOOL_NOT/13               #3=       $2                   ?0                  	;0
	6   184  JMPZ/43                   ?0        #3                   ?8                  	;0	>>8
	7   185  GOTO/253                  ?0        ?10                  ?4                  	;0
	8   187  INIT_METHOD_CALL/112      ?0        16?0                 5:'close_mysql'     	;0	<<6
	9   187  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	10  189  BEGIN_SILENCE/57          #5=       ?0                   ?0                  	;0
	11  189  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'unlink'          	;1
	12  189  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	13  189  DO_FCALL_BY_NAME/131      ?4        ?0                   ?0                  	;0
	14  189  END_SILENCE/58            ?0        #5                   ?0                  	;0
	15  190  NOP/0                     ?0        9:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?201                 ?0                  	;0	>>201
1   6    FE_RESET_R/77             $17=      16?0                 ?59                 	;0
2   6    FE_FETCH_R/78             ?0        $17                  16?1                	;59	>>59	<<58
3   7    INIT_METHOD_CALL/112      ?0        16?2                 1:'query'           	;1
4   7    CONCAT/8                  #18=      3:'SELECT `id`, `tmdb_id` FROM `streams_series` WHERE `similar` IS NULL AND `tmdb_id` > 0 LIMIT ' 16?1                	;0
5   7    CONCAT/8                  #19=      #18                  4:', 1000;'         	;0
6   7    SEND_VAL_EX/116           ?80       #19                  ?1                  	;0
7   7    DO_FCALL/60               ?3        ?0                   ?0                  	;0
8   8    INIT_METHOD_CALL/112      ?0        16?2                 5:'get_rows'        	;0
9   8    DO_FCALL/60               $21=      ?0                   ?0                  	;0
10  8    FE_RESET_R/77             $22=      $21                  ?57                 	;0
11  8    FE_FETCH_R/78             ?0        $22                  16?3                	;57	>>57	<<56
12  9    ASSIGN/38                 ?6        16?4                 7:array (
)         	;0
13  10   INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'range'           	;2
14  10   SEND_VAL_EX/116           ?80       10:1                 ?1                  	;0
15  10   SEND_VAL_EX/116           ?96       11:3                 ?2                  	;0
16  10   DO_FCALL_BY_NAME/131      $24=      ?0                   ?0                  	;0
17  10   FE_RESET_R/77             $25=      $24                  ?42                 	;0
18  10   FE_FETCH_R/78             ?0        $25                  16?5                	;42	>>42	<<41
19  11   INIT_FCALL_BY_NAME/59     ?0        ?0                   12:'json_decode'    	;2
20  11   INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'json_encode'    	;1
21  11   INIT_METHOD_CALL/112      ?0        16?6                 16:'getSimilarSeries'	;2
22  11   FETCH_DIM_FUNC_ARG/93     $26=      16?3                 18:'tmdb_id'        	;1
23  11   SEND_VAR_EX/66            ?80       $26                  ?1                  	;0
24  11   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
25  11   DO_FCALL/60               $27=      ?0                   ?0                  	;0
26  11   SEND_VAR_NO_REF_EX/50     ?80       $27                  ?1                  	;0
27  11   DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
28  11   SEND_VAR_NO_REF_EX/50     ?80       $28                  ?1                  	;0
29  11   SEND_VAL_EX/116           ?96       19:true              ?2                  	;0
30  11   DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
31  11   FE_RESET_R/77             $30=      $29                  ?40                 	;0
32  11   FE_FETCH_R/78             ?0        $30                  16?7                	;40	>>40	<<39
33  12   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'intval'         	;1
34  12   FETCH_DIM_FUNC_ARG/93     $32=      16?7                 22:'id'             	;1
35  12   SEND_VAR_EX/66            ?80       $32                  ?1                  	;0
36  12   DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
37  12   ASSIGN_DIM/147            ?14       16?4                 ?0                  	;0
38  12   OP_DATA/137               ?0        $33                  ?0                  	;0
39  13   JMP/42                    ?0        ?32                  ?0                  	;0	>>32
40  13   FE_FREE/127               ?0        $30                  ?0                  	;0	<<31
41  16   JMP/42                    ?0        ?18                  ?0                  	;0	>>18
42  16   FE_FREE/127               ?0        $25                  ?0                  	;0	<<17
43  19   INIT_FCALL_BY_NAME/59     ?0        ?0                   23:'array_unique'   	;1
44  19   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
45  19   DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
46  19   ASSIGN/38                 ?18       16?4                 $34                 	;0
47  20   INIT_METHOD_CALL/112      ?0        16?2                 25:'query'          	;3
48  20   SEND_VAL_EX/116           ?80       27:'UPDATE `streams_series` SET `similar` = ? WHERE `id` = ?;' ?1                  	;0
49  20   INIT_FCALL_BY_NAME/59     ?0        ?0                   28:'json_encode'    	;1
50  20   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
51  20   DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
52  20   SEND_VAR_NO_REF_EX/50     ?96       $36                  ?2                  	;0
53  20   FETCH_DIM_FUNC_ARG/93     $37=      16?3                 30:'id'             	;3
54  20   SEND_VAR_EX/66            ?112      $37                  ?3                  	;0
55  20   DO_FCALL/60               ?21       ?0                   ?0                  	;0
56  21   JMP/42                    ?0        ?11                  ?0                  	;0	>>11
57  21   FE_FREE/127               ?0        $22                  ?0                  	;0	<<10
58  24   JMP/42                    ?0        ?2                   ?0                  	;0	>>2
59  24   FE_FREE/127               ?0        $17                  ?0                  	;0	<<1
60  29   GOTO/253                  ?0        ?285                 ?31                 	;0
61  31   INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'cli_set_process_title'	;1
62  31   SEND_VAL_EX/116           ?80       34:'XUI[Popular]'    ?1                  	;0
63  31   DO_FCALL_BY_NAME/131      ?22       ?0                   ?0                  	;0
64  32   FETCH_CONSTANT/99         #40=      ?0                   35:'CRONS_TMP_PATH' 	;16
65  32   INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'md5'            	;1
66  32   INIT_STATIC_METHOD_CALL/113 ?0        40:'XUI'             42:'A336b0daD3eAf634'	;0
67  32   DO_FCALL/60               $41=      ?0                   ?0                  	;0
68  32   CONCAT/8                  #42=      $41                  44:'crons\\tmdb_popular.php'	;0
69  32   SEND_VAL_EX/116           ?80       #42                  ?1                  	;0
70  32   DO_FCALL_BY_NAME/131      $43=      ?0                   ?0                  	;0
71  32   CONCAT/8                  #44=      #40                  $43                 	;0
72  32   ASSIGN/38                 ?28       16?8                 #44                 	;0
73  33   INIT_STATIC_METHOD_CALL/113 ?0        45:'XUI'             47:'a3cF732c257BD804'	;1
74  33   SEND_VAR_EX/66            ?80       16?8                 ?1                  	;0
75  33   DO_FCALL/60               ?29       ?0                   ?0                  	;0
76  34   INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'strlen'         	;1
77  34   FETCH_STATIC_PROP_FUNC_ARG/177 $47=      51:'rSettings'       52:'XUI'            	;1
78  34   FETCH_DIM_FUNC_ARG/93     $48=      $47                  54:'tmdb_api_key'   	;1
79  34   SEND_VAR_EX/66            ?80       $48                  ?1                  	;0
80  34   DO_FCALL_BY_NAME/131      $49=      ?0                   ?0                  	;0
81  34   IS_SMALLER/19             #50=      55:0                 $49                 	;0
82  34   BOOL_NOT/13               #51=      #50                  ?0                  	;0
83  34   JMPZ/43                   ?0        #51                  ?85                 	;0	>>85
84  35   GOTO/253                  ?0        ?60                  ?56                 	;0
85  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'strlen'         	;1	<<83
86  37   FETCH_STATIC_PROP_FUNC_ARG/177 $52=      59:'rSettings'       60:'XUI'            	;1
87  37   FETCH_DIM_FUNC_ARG/93     $53=      $52                  62:'tmdb_language'  	;1
88  37   SEND_VAR_EX/66            ?80       $53                  ?1                  	;0
89  37   DO_FCALL_BY_NAME/131      $54=      ?0                   ?0                  	;0
90  37   IS_SMALLER/19             #55=      63:0                 $54                 	;0
91  37   JMPZ/43                   ?0        #55                  ?93                 	;0	>>93
92  38   GOTO/253                  ?0        ?333                 ?64                 	;0
93  40   GOTO/253                  ?0        ?326                 ?65                 	;0	<<91
94  43   FE_RESET_R/77             $56=      16?0                 ?153                	;0
95  43   FE_FETCH_R/78             ?0        $56                  16?1                	;153	>>153	<<152
96  44   INIT_METHOD_CALL/112      ?0        16?2                 66:'query'          	;1
97  44   CONCAT/8                  #57=      68:'SELECT `id`, `tmdb_id` FROM `streams` WHERE `type` = 2 AND `similar` IS NULL AND `tmdb_id` > 0 LIMIT ' 16?1                	;0
98  44   CONCAT/8                  #58=      #57                  69:', 1000;'        	;0
99  44   SEND_VAL_EX/116           ?80       #58                  ?1                  	;0
100 44   DO_FCALL/60               ?42       ?0                   ?0                  	;0
101 45   INIT_METHOD_CALL/112      ?0        16?2                 70:'get_rows'       	;0
102 45   DO_FCALL/60               $60=      ?0                   ?0                  	;0
103 45   FE_RESET_R/77             $61=      $60                  ?151                	;0
104 45   FE_FETCH_R/78             ?0        $61                  16?3                	;151	>>151	<<150
105 46   ASSIGN/38                 ?45       16?4                 72:array (
)        	;0
106 47   INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'range'          	;2
107 47   SEND_VAL_EX/116           ?80       75:1                 ?1                  	;0
108 47   SEND_VAL_EX/116           ?96       76:3                 ?2                  	;0
109 47   DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
110 47   FE_RESET_R/77             $64=      $63                  ?136                	;0
111 47   FE_FETCH_R/78             ?0        $64                  16?5                	;136	>>136	<<135
112 48   INIT_FCALL_BY_NAME/59     ?0        ?0                   77:'json_decode'    	;2
113 48   INIT_FCALL_BY_NAME/59     ?0        ?0                   79:'json_encode'    	;1
114 48   INIT_METHOD_CALL/112      ?0        16?6                 81:'getSimilarMovies'	;2
115 48   FETCH_DIM_FUNC_ARG/93     $65=      16?3                 83:'tmdb_id'        	;1
116 48   SEND_VAR_EX/66            ?80       $65                  ?1                  	;0
117 48   SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
118 48   DO_FCALL/60               $66=      ?0                   ?0                  	;0
119 48   SEND_VAR_NO_REF_EX/50     ?80       $66                  ?1                  	;0
120 48   DO_FCALL_BY_NAME/131      $67=      ?0                   ?0                  	;0
121 48   SEND_VAR_NO_REF_EX/50     ?80       $67                  ?1                  	;0
122 48   SEND_VAL_EX/116           ?96       84:true              ?2                  	;0
123 48   DO_FCALL_BY_NAME/131      $68=      ?0                   ?0                  	;0
124 48   FE_RESET_R/77             $69=      $68                  ?134                	;0
125 48   FE_FETCH_R/78             ?0        $69                  16?7                	;134	>>134	<<133
126 49   INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'intval'         	;1
127 49   FETCH_DIM_FUNC_ARG/93     $71=      16?7                 87:'_data'          	;1
128 49   FETCH_DIM_FUNC_ARG/93     $72=      $71                  88:'id'             	;1
129 49   SEND_VAR_EX/66            ?80       $72                  ?1                  	;0
130 49   DO_FCALL_BY_NAME/131      $73=      ?0                   ?0                  	;0
131 49   ASSIGN_DIM/147            ?53       16?4                 ?0                  	;0
132 49   OP_DATA/137               ?0        $73                  ?0                  	;0
133 50   JMP/42                    ?0        ?125                 ?0                  	;0	>>125
134 50   FE_FREE/127               ?0        $69                  ?0                  	;0	<<124
135 53   JMP/42                    ?0        ?111                 ?0                  	;0	>>111
136 53   FE_FREE/127               ?0        $64                  ?0                  	;0	<<110
137 56   INIT_FCALL_BY_NAME/59     ?0        ?0                   89:'array_unique'   	;1
138 56   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
139 56   DO_FCALL_BY_NAME/131      $74=      ?0                   ?0                  	;0
140 56   ASSIGN/38                 ?58       16?4                 $74                 	;0
141 57   INIT_METHOD_CALL/112      ?0        16?2                 91:'query'          	;3
142 57   SEND_VAL_EX/116           ?80       93:'UPDATE `streams` SET `similar` = ? WHERE `id` = ?;' ?1                  	;0
143 57   INIT_FCALL_BY_NAME/59     ?0        ?0                   94:'json_encode'    	;1
144 57   SEND_VAR_EX/66            ?80       16?4                 ?1                  	;0
145 57   DO_FCALL_BY_NAME/131      $76=      ?0                   ?0                  	;0
146 57   SEND_VAR_NO_REF_EX/50     ?96       $76                  ?2                  	;0
147 57   FETCH_DIM_FUNC_ARG/93     $77=      16?3                 96:'id'             	;3
148 57   SEND_VAR_EX/66            ?112      $77                  ?3                  	;0
149 57   DO_FCALL/60               ?61       ?0                   ?0                  	;0
150 58   JMP/42                    ?0        ?104                 ?0                  	;0	>>104
151 58   FE_FREE/127               ?0        $61                  ?0                  	;0	<<103
152 61   JMP/42                    ?0        ?95                  ?0                  	;0	>>95
153 61   FE_FREE/127               ?0        $56                  ?0                  	;0	<<94
154 65   INIT_METHOD_CALL/112      ?0        16?2                 97:'query'          	;1
155 65   SEND_VAL_EX/116           ?80       99:'SELECT COUNT(*) AS `count` FROM `streams_series` WHERE `similar` IS NULL AND `tmdb_id` > 0;' ?1                  	;0
156 65   DO_FCALL/60               ?62       ?0                   ?0                  	;0
157 66   GOTO/253                  ?0        ?308                 ?100                	;0
158 69   INIT_FCALL_BY_NAME/59     ?0        ?0                   101:'range'         	;2
159 69   SEND_VAL_EX/116           ?80       103:1                ?1                  	;0
160 69   SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
161 69   DO_FCALL_BY_NAME/131      $80=      ?0                   ?0                  	;0
162 69   FE_RESET_R/77             $81=      $80                  ?187                	;0
163 69   FE_FETCH_R/78             ?0        $81                  16?5                	;187	>>187	<<186
164 70   INIT_METHOD_CALL/112      ?0        16?6                 104:'getPopularTVShows'	;1
165 70   SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
166 70   DO_FCALL/60               $82=      ?0                   ?0                  	;0
167 70   ASSIGN/38                 ?66       16?10                $82                 	;0
168 71   FE_RESET_R/77             $84=      16?10                ?185                	;0
169 71   FE_FETCH_R/78             ?0        $84                  16?7                	;185	>>185	<<184
170 72   INIT_METHOD_CALL/112      ?0        16?7                 106:'getID'         	;0
171 72   DO_FCALL/60               $85=      ?0                   ?0                  	;0
172 72   ISSET_ISEMPTY_DIM_OBJ/115 #86=      16?11                $85                 	;33554432
173 72   BOOL_NOT/13               #87=      #86                  ?0                  	;0
174 72   JMPZ/43                   ?0        #87                  ?178                	;0	>>178
175 73   NOP/0                     ?0        ?0                   ?0                  	;1
176 73   NOP/0                     ?0        ?0                   ?0                  	;1
177 73   GOTO/253                  ?0        ?184                 ?108                	;0
178 75   INIT_METHOD_CALL/112      ?0        16?7                 110:'getID'         	;0	<<174
179 75   DO_FCALL/60               $90=      ?0                   ?0                  	;0
180 75   FETCH_DIM_R/81            $91=      16?11                $90                 	;0
181 75   FETCH_DIM_W/84            $88=      16?12                109:'series'        	;0
182 75   ASSIGN_DIM/147            ?72       $88                  ?4397406            	;0
183 75   OP_DATA/137               ?0        $91                  ?0                  	;0
184 77   JMP/42                    ?0        ?169                 ?0                  	;0	>>169
185 77   FE_FREE/127               ?0        $84                  ?0                  	;0	<<168
186 80   JMP/42                    ?0        ?163                 ?0                  	;0	>>163
187 80   FE_FREE/127               ?0        $81                  ?0                  	;0	<<162
188 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   112:'file_put_contents'	;2
189 83   FETCH_CONSTANT/99         #92=      ?0                   114:'CONTENT_PATH'  	;16
190 83   CONCAT/8                  #93=      #92                  117:'tmdb_popular'  	;0
191 83   SEND_VAL_EX/116           ?80       #93                  ?1                  	;0
192 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   118:'igbinary_serialize'	;1
193 83   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
194 83   DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
195 83   SEND_VAR_NO_REF_EX/50     ?96       $94                  ?2                  	;0
196 83   DO_FCALL_BY_NAME/131      ?78       ?0                   ?0                  	;0
197 84   INIT_METHOD_CALL/112      ?0        16?2                 120:'query'         	;1
198 84   SEND_VAL_EX/116           ?80       122:'SELECT COUNT(*) AS `count` FROM `streams` WHERE `type` = 2 AND `similar` IS NULL AND `tmdb_id` > 0;' ?1                  	;0
199 84   DO_FCALL/60               ?79       ?0                   ?0                  	;0
200 85   GOTO/253                  ?0        ?267                 ?123                	;0
201 87   INIT_FCALL_BY_NAME/59     ?0        ?0                   124:'posix_getpwuid'	;1	<<0
202 87   INIT_FCALL_BY_NAME/59     ?0        ?0                   126:'posix_geteuid' 	;0
203 87   DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
204 87   SEND_VAR_NO_REF_EX/50     ?80       $97                  ?1                  	;0
205 87   DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
206 87   FETCH_DIM_R/81            $99=      $98                  128:'name'          	;0
207 87   IS_NOT_EQUAL/18           #100=     $99                  129:'xui'           	;0
208 87   BOOL_NOT/13               #101=     #100                 ?0                  	;0
209 87   JMPZ/43                   ?0        #101                 ?211                	;0	>>211
210 88   GOTO/253                  ?0        ?212                 ?130                	;0
211 90   EXIT/79                   ?0        131:'Please run as XUI!
' ?0                  	;0	<<209
212 92   INIT_FCALL_BY_NAME/59     ?0        ?0                   132:'set_time_limit'	;1
213 92   SEND_VAL_EX/116           ?80       134:0                ?1                  	;0
214 92   DO_FCALL_BY_NAME/131      ?85       ?0                   ?0                  	;0
215 93   BEGIN_SILENCE/57          #103=     ?0                   ?0                  	;0
216 93   FETCH_R/80                $104=     135:'argc'           ?0                  	;268435456
217 93   END_SILENCE/58            ?0        #103                 ?0                  	;0
218 93   JMPZ/43                   ?0        $104                 ?220                	;0	>>220
219 94   GOTO/253                  ?0        ?249                 ?136                	;0
220 96   GOTO/253                  ?0        ?248                 ?137                	;0	<<218
221 98   ASSIGN/38                 ?88       16?9                 138:100             	;0
222 99   ASSIGN/38                 ?89       16?11                139:array (
)       	;0
223 100  INIT_METHOD_CALL/112      ?0        16?2                 140:'query'         	;1
224 100  SEND_VAL_EX/116           ?80       142:'SELECT `id`, `movie_properties` FROM `streams` WHERE `type` = 2 AND `movie_properties` IS NOT NULL AND LENGTH(`movie_properties`) > 0;' ?1                  	;0
225 100  DO_FCALL/60               ?90       ?0                   ?0                  	;0
226 101  INIT_METHOD_CALL/112      ?0        16?2                 143:'get_rows'      	;0
227 101  DO_FCALL/60               $108=     ?0                   ?0                  	;0
228 101  FE_RESET_R/77             $109=     $108                 ?246                	;0
229 101  FE_FETCH_R/78             ?0        $109                 16?3                	;246	>>246	<<245
230 102  INIT_FCALL_BY_NAME/59     ?0        ?0                   145:'json_decode'   	;2
231 102  FETCH_DIM_FUNC_ARG/93     $110=     16?3                 147:'movie_properties'	;1
232 102  SEND_VAR_EX/66            ?80       $110                 ?1                  	;0
233 102  SEND_VAL_EX/116           ?96       148:true             ?2                  	;0
234 102  DO_FCALL_BY_NAME/131      $111=     ?0                   ?0                  	;0
235 102  ASSIGN/38                 ?95       16?13                $111                	;0
236 103  FETCH_DIM_R/81            $113=     16?13                149:'tmdb_id'       	;0
237 103  BOOL_NOT/13               #114=     $113                 ?0                  	;0
238 103  JMPZ/43                   ?0        #114                 ?241                	;0	>>241
239 104  NOP/0                     ?0        ?0                   ?0                  	;1
240 104  GOTO/253                  ?0        ?245                 ?150                	;0
241 106  FETCH_DIM_R/81            $115=     16?13                151:'tmdb_id'       	;0	<<238
242 106  FETCH_DIM_R/81            $117=     16?3                 152:'id'            	;0
243 106  ASSIGN_DIM/147            ?99       16?11                $115                	;0
244 106  OP_DATA/137               ?0        $117                 ?0                  	;0
245 108  JMP/42                    ?0        ?229                 ?0                  	;0	>>229
246 108  FE_FREE/127               ?0        $109                 ?0                  	;0	<<228
247 111  GOTO/253                  ?0        ?343                 ?153                	;0
248 113  EXIT/79                   ?0        154:0                ?0                  	;0
249 115  INIT_FCALL_BY_NAME/59     ?0        ?0                   155:'register_shutdown_function'	;1
250 115  SEND_VAL_EX/116           ?80       157:'shutdown'       ?1                  	;0
251 115  DO_FCALL_BY_NAME/131      ?101      ?0                   ?0                  	;0
252 116  INIT_FCALL_BY_NAME/59     ?0        ?0                   158:'str_replace'   	;3
253 116  SEND_VAL_EX/116           ?80       160:'\\'             ?1                  	;0
254 116  SEND_VAL_EX/116           ?96       161:'/'              ?2                  	;0
255 116  INIT_FCALL_BY_NAME/59     ?0        ?0                   162:'dirname'       	;1
256 116  FETCH_DIM_FUNC_ARG/93     $119=     16?14                164:0               	;1
257 116  SEND_VAR_EX/66            ?80       $119                 ?1                  	;0
258 116  DO_FCALL_BY_NAME/131      $120=     ?0                   ?0                  	;0
259 116  SEND_VAR_NO_REF_EX/50     ?112      $120                 ?3                  	;0
260 116  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
261 116  CONCAT/8                  #122=     $121                 165:'/../www/init.php'	;0
262 116  INCLUDE_OR_EVAL/73        ?106      #122                 ?0                  	;8
263 117  FETCH_CONSTANT/99         #124=     ?0                   166:'XUI_HOME'      	;16
264 117  CONCAT/8                  #125=     #124                 169:'includes/libs/tmdb.php'	;0
265 117  INCLUDE_OR_EVAL/73        ?109      #125                 ?0                  	;16
266 118  GOTO/253                  ?0        ?61                  ?170                	;0
267 120  INIT_METHOD_CALL/112      ?0        16?2                 171:'get_row'       	;0
268 120  DO_FCALL/60               $127=     ?0                   ?0                  	;0
269 120  FETCH_DIM_R/81            $128=     $127                 173:'count'         	;0
270 120  ASSIGN/38                 ?112      16?15                $128                	;0
271 121  IS_SMALLER/19             #130=     174:0                16?15               	;0
272 121  BOOL_NOT/13               #131=     #130                 ?0                  	;0
273 121  JMPZ/43                   ?0        #131                 ?275                	;0	>>275
274 122  GOTO/253                  ?0        ?154                 ?175                	;0
275 124  INIT_FCALL_BY_NAME/59     ?0        ?0                   176:'range'         	;3	<<273
276 124  SEND_VAL_EX/116           ?80       178:0                ?1                  	;0
277 124  SEND_VAR_EX/66            ?96       16?15                ?2                  	;0
278 124  SEND_VAL_EX/116           ?112      179:1000             ?3                  	;0
279 124  DO_FCALL_BY_NAME/131      $132=     ?0                   ?0                  	;0
280 124  ASSIGN/38                 ?116      16?0                 $132                	;0
281 125  JMPZ/43                   ?0        16?0                 ?283                	;0	>>283
282 126  GOTO/253                  ?0        ?94                  ?180                	;0
283 128  ASSIGN/38                 ?117      16?0                 181:array (
  0 => 0,
)	;0	<<281
284 129  GOTO/253                  ?0        ?94                  ?182                	;0
285 131  ASSIGN/38                 ?118      16?16                183:array (
)       	;0
286 132  INIT_METHOD_CALL/112      ?0        16?2                 184:'query'         	;1
287 132  SEND_VAL_EX/116           ?80       186:'SELECT `stream_id`, COUNT(`activity_id`) AS `count` FROM `lines_activity` LEFT JOIN `streams` ON `streams`.`id` = `lines_activity`.`stream_id` WHERE `type` = 1 AND `date_end` < UNIX_TIMESTAMP() - (86400*28) GROUP BY `stream_id` ORDER BY `count` DESC LIMIT 500;' ?1                  	;0
288 132  DO_FCALL/60               ?119      ?0                   ?0                  	;0
289 133  INIT_METHOD_CALL/112      ?0        16?2                 187:'get_rows'      	;0
290 133  DO_FCALL/60               $137=     ?0                   ?0                  	;0
291 133  FE_RESET_R/77             $138=     $137                 ?297                	;0
292 133  FE_FETCH_R/78             ?0        $138                 16?3                	;297	>>297	<<296
293 134  FETCH_DIM_R/81            $140=     16?3                 189:'stream_id'     	;0
294 134  ASSIGN_DIM/147            ?122      16?16                ?4414262            	;0
295 134  OP_DATA/137               ?0        $140                 ?0                  	;0
296 135  JMP/42                    ?0        ?292                 ?0                  	;0	>>292
297 135  FE_FREE/127               ?0        $138                 ?0                  	;0	<<291
298 138  INIT_FCALL_BY_NAME/59     ?0        ?0                   190:'file_put_contents'	;2
299 138  FETCH_CONSTANT/99         #141=     ?0                   192:'CONTENT_PATH'  	;16
300 138  CONCAT/8                  #142=     #141                 195:'live_popular'  	;0
301 138  SEND_VAL_EX/116           ?80       #142                 ?1                  	;0
302 138  INIT_FCALL_BY_NAME/59     ?0        ?0                   196:'igbinary_serialize'	;1
303 138  SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
304 138  DO_FCALL_BY_NAME/131      $143=     ?0                   ?0                  	;0
305 138  SEND_VAR_NO_REF_EX/50     ?96       $143                 ?2                  	;0
306 138  DO_FCALL_BY_NAME/131      ?127      ?0                   ?0                  	;0
307 139  GOTO/253                  ?0        ?388                 ?198                	;0
308 141  INIT_METHOD_CALL/112      ?0        16?2                 199:'get_row'       	;0
309 141  DO_FCALL/60               $145=     ?0                   ?0                  	;0
310 141  FETCH_DIM_R/81            $146=     $145                 201:'count'         	;0
311 141  ASSIGN/38                 ?130      16?15                $146                	;0
312 142  IS_SMALLER/19             #148=     202:0                16?15               	;0
313 142  BOOL_NOT/13               #149=     #148                 ?0                  	;0
314 142  JMPZ/43                   ?0        #149                 ?316                	;0	>>316
315 143  GOTO/253                  ?0        ?60                  ?203                	;0
316 145  INIT_FCALL_BY_NAME/59     ?0        ?0                   204:'range'         	;3	<<314
317 145  SEND_VAL_EX/116           ?80       206:0                ?1                  	;0
318 145  SEND_VAR_EX/66            ?96       16?15                ?2                  	;0
319 145  SEND_VAL_EX/116           ?112      207:1000             ?3                  	;0
320 145  DO_FCALL_BY_NAME/131      $150=     ?0                   ?0                  	;0
321 145  ASSIGN/38                 ?134      16?0                 $150                	;0
322 146  JMPZ/43                   ?0        16?0                 ?324                	;0	>>324
323 147  GOTO/253                  ?0        ?1                   ?208                	;0
324 149  ASSIGN/38                 ?135      16?0                 209:array (
  0 => 0,
)	;0	<<322
325 150  GOTO/253                  ?0        ?1                   ?210                	;0
326 152  NEW/68                    $153=     211:'TMDB'           ?160                	;1
327 152  FETCH_STATIC_PROP_FUNC_ARG/177 $154=     213:'rSettings'      214:'XUI'           	;1
328 152  FETCH_DIM_FUNC_ARG/93     $155=     $154                 216:'tmdb_api_key'  	;1
329 152  SEND_VAR_EX/66            ?80       $155                 ?1                  	;0
330 152  DO_FCALL/60               ?139      ?8                   ?0                  	;0
331 152  ASSIGN/38                 ?140      16?6                 $153                	;0
332 153  GOTO/253                  ?0        ?342                 ?217                	;0
333 155  NEW/68                    $158=     218:'TMDB'           ?256                	;2
334 155  FETCH_STATIC_PROP_FUNC_ARG/177 $159=     220:'rSettings'      221:'XUI'           	;1
335 155  FETCH_DIM_FUNC_ARG/93     $160=     $159                 223:'tmdb_api_key'  	;1
336 155  SEND_VAR_EX/66            ?80       $160                 ?1                  	;0
337 155  FETCH_STATIC_PROP_FUNC_ARG/177 $161=     224:'rSettings'      225:'XUI'           	;2
338 155  FETCH_DIM_FUNC_ARG/93     $162=     $161                 227:'tmdb_language' 	;2
339 155  SEND_VAR_EX/66            ?96       $162                 ?2                  	;0
340 155  DO_FCALL/60               ?146      ?8                   ?0                  	;0
341 155  ASSIGN/38                 ?147      16?6                 $158                	;0
342 157  GOTO/253                  ?0        ?221                 ?228                	;0
343 159  INIT_METHOD_CALL/112      ?0        16?2                 229:'query'         	;1
344 159  SEND_VAL_EX/116           ?80       231:'SELECT `id`, `tmdb_id` FROM `streams_series` WHERE `tmdb_id` IS NOT NULL AND LENGTH(`tmdb_id`) > 0;' ?1                  	;0
345 159  DO_FCALL/60               ?148      ?0                   ?0                  	;0
346 160  INIT_METHOD_CALL/112      ?0        16?2                 232:'get_rows'      	;0
347 160  DO_FCALL/60               $166=     ?0                   ?0                  	;0
348 160  FE_RESET_R/77             $167=     $166                 ?355                	;0
349 160  FE_FETCH_R/78             ?0        $167                 16?3                	;355	>>355	<<354
350 161  FETCH_DIM_R/81            $168=     16?3                 234:'tmdb_id'       	;0
351 161  FETCH_DIM_R/81            $170=     16?3                 235:'id'            	;0
352 161  ASSIGN_DIM/147            ?152      16?11                $168                	;0
353 161  OP_DATA/137               ?0        $170                 ?0                  	;0
354 162  JMP/42                    ?0        ?349                 ?0                  	;0	>>349
355 162  FE_FREE/127               ?0        $167                 ?0                  	;0	<<348
356 165  ASSIGN/38                 ?154      16?12                236:array (
  'movies' => 
  array (
  ),
  'series' => 
  array (
  ),
)	;0
357 166  INIT_FCALL_BY_NAME/59     ?0        ?0                   237:'range'         	;2
358 166  SEND_VAL_EX/116           ?80       239:1                ?1                  	;0
359 166  SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
360 166  DO_FCALL_BY_NAME/131      $172=     ?0                   ?0                  	;0
361 166  FE_RESET_R/77             $173=     $172                 ?386                	;0
362 166  FE_FETCH_R/78             ?0        $173                 16?5                	;386	>>386	<<385
363 167  INIT_METHOD_CALL/112      ?0        16?6                 240:'getPopularMovies'	;1
364 167  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
365 167  DO_FCALL/60               $174=     ?0                   ?0                  	;0
366 167  ASSIGN/38                 ?158      16?10                $174                	;0
367 168  FE_RESET_R/77             $176=     16?10                ?384                	;0
368 168  FE_FETCH_R/78             ?0        $176                 16?7                	;384	>>384	<<383
369 169  INIT_METHOD_CALL/112      ?0        16?7                 242:'getID'         	;0
370 169  DO_FCALL/60               $177=     ?0                   ?0                  	;0
371 169  ISSET_ISEMPTY_DIM_OBJ/115 #178=     16?11                $177                	;33554432
372 169  BOOL_NOT/13               #179=     #178                 ?0                  	;0
373 169  JMPZ/43                   ?0        #179                 ?377                	;0	>>377
374 170  NOP/0                     ?0        ?0                   ?0                  	;1
375 170  NOP/0                     ?0        ?0                   ?0                  	;1
376 170  GOTO/253                  ?0        ?383                 ?244                	;0
377 172  INIT_METHOD_CALL/112      ?0        16?7                 246:'getID'         	;0	<<373
378 172  DO_FCALL/60               $182=     ?0                   ?0                  	;0
379 172  FETCH_DIM_R/81            $183=     16?11                $182                	;0
380 172  FETCH_DIM_W/84            $180=     16?12                245:'movies'        	;0
381 172  ASSIGN_DIM/147            ?164      $180                 ?4397406            	;0
382 172  OP_DATA/137               ?0        $183                 ?0                  	;0
383 174  JMP/42                    ?0        ?368                 ?0                  	;0	>>368
384 174  FE_FREE/127               ?0        $176                 ?0                  	;0	<<367
385 177  JMP/42                    ?0        ?362                 ?0                  	;0	>>362
386 177  FE_FREE/127               ?0        $173                 ?0                  	;0	<<361
387 179  GOTO/253                  ?0        ?158                 ?248                	;0
388 181  NOP/0                     ?0        ?0                   ?0                  	;0
389 191  NOP/0                     ?0        249:1                ?0                  	;4294967295
*/

?>