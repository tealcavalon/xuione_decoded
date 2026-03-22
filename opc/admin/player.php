<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?253                 ?0                  	;0	>>253
1   5    FETCH_STATIC_PROP_IS/176  $12=      1:'rRequest'         2:'XUI'             	;0
2   5    ISSET_ISEMPTY_DIM_OBJ/115 #13=      $12                  4:'duration'        	;33554432
3   5    BOOL_NOT/13               #14=      #13                  ?0                  	;0
4   5    JMPZ/43                   ?0        #14                  ?6                  	;0	>>6
5   6    GOTO/253                  ?0        ?10                  ?5                  	;0
6   8    FETCH_STATIC_PROP_R/173   $16=      7:'rRequest'         8:'XUI'             	;0	<<4
7   8    FETCH_DIM_R/81            $17=      $16                  10:'duration'       	;0
8   8    ASSIGN_DIM/147            ?3        16?0                 6:'duration'        	;0
9   8    OP_DATA/137               ?0        $17                  ?0                  	;0
10  10   INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'in_array'       	;2
11  10   FETCH_STATIC_PROP_FUNC_ARG/177 $18=      13:'rRequest'        14:'XUI'            	;1
12  10   FETCH_DIM_FUNC_ARG/93     $19=      $18                  16:'type'           	;1
13  10   SEND_VAR_EX/66            ?80       $19                  ?1                  	;0
14  10   SEND_VAL_EX/116           ?96       17:array (
  0 => 'live',
  1 => 'timeshift',
) ?2                  	;0
15  10   DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
16  10   JMPZ/43                   ?0        $20                  ?18                 	;0	>>18
17  11   GOTO/253                  ?0        ?267                 ?18                 	;0
18  13   INIT_METHOD_CALL/112      ?0        16?1                 19:'query'          	;2	<<16
19  13   SEND_VAL_EX/116           ?80       21:'SELECT `server_id`, `on_demand` FROM `streams_servers` LEFT JOIN `streams` ON `streams`.`id` = `streams_servers`.`stream_id` WHERE (`streams`.`direct_source` = 0 AND `streams_servers`.`pid` > 0 AND `streams_servers`.`to_analyze` = 0 AND `streams_servers`.`stream_status` <> 1) AND `stream_id` = ?;' ?1                  	;0
20  13   FETCH_STATIC_PROP_FUNC_ARG/177 $21=      22:'rRequest'        23:'XUI'            	;2
21  13   FETCH_DIM_FUNC_ARG/93     $22=      $21                  25:'id'             	;2
22  13   SEND_VAR_EX/66            ?96       $22                  ?2                  	;0
23  13   DO_FCALL/60               ?11       ?0                   ?0                  	;0
24  14   GOTO/253                  ?0        ?266                 ?26                 	;0
25  18   FETCH_STATIC_PROP_IS/176  $24=      27:'rRequest'        28:'XUI'            	;0
26  18   ISSET_ISEMPTY_DIM_OBJ/115 #25=      $24                  30:'start'          	;33554432
27  18   BOOL_NOT/13               #26=      #25                  ?0                  	;0
28  18   JMPZ/43                   ?0        #26                  ?30                 	;0	>>30
29  19   GOTO/253                  ?0        ?34                  ?31                 	;0
30  21   FETCH_STATIC_PROP_R/173   $28=      33:'rRequest'        34:'XUI'            	;0	<<28
31  21   FETCH_DIM_R/81            $29=      $28                  36:'start'          	;0
32  21   ASSIGN_DIM/147            ?15       16?0                 32:'start'          	;0
33  21   OP_DATA/137               ?0        $29                  ?0                  	;0
34  23   GOTO/253                  ?0        ?1                   ?37                 	;0
35  25   INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'in_array'       	;2
36  25   FETCH_STATIC_PROP_FUNC_ARG/177 $30=      40:'rRequest'        41:'XUI'            	;1
37  25   FETCH_DIM_FUNC_ARG/93     $31=      $30                  43:'type'           	;1
38  25   SEND_VAR_EX/66            ?80       $31                  ?1                  	;0
39  25   SEND_VAL_EX/116           ?96       44:array (
  0 => 'live',
  1 => 'timeshift',
) ?2                  	;0
40  25   DO_FCALL_BY_NAME/131      $32=      ?0                   ?0                  	;0
41  25   JMPZ/43                   ?0        $32                  ?44                 	;0	>>44
42  25   QM_ASSIGN/22              #33=      45:'hls'             ?0                  	;0
43  25   JMP/42                    ?0        ?51                  ?0                  	;0	>>51
44  25   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'preg_replace'   	;3	<<41
45  25   SEND_VAL_EX/116           ?80       48:'/[^A-Za-z0-9 ]/' ?1                  	;0
46  25   SEND_VAL_EX/116           ?96       49:''                ?2                  	;0
47  25   FETCH_DIM_FUNC_ARG/93     $34=      16?0                 50:'container'      	;3
48  25   SEND_VAR_EX/66            ?112      $34                  ?3                  	;0
49  25   DO_FCALL_BY_NAME/131      $35=      ?0                   ?0                  	;0
50  25   QM_ASSIGN/22              #33=      $35                  ?0                  	;0
51  25   ECHO/40                   ?0        #33                  ?0                  	;0	<<43
52  26   ECHO/40                   ?0        51:'",
            "autostart": true,
            "width": "100%",
            "height": "100%"
        });
        rPlayer.play();
        ' ?0                  	;0
53  28   GOTO/253                  ?0        ?275                 ?52                 	;0
54  30   JMPZ/43                   ?0        16?2                 ?56                 	;0	>>56
55  31   GOTO/253                  ?0        ?57                  ?53                 	;0
56  33   ECHO/40                   ?0        54:'    <script src="assets/libs/jwplayer/jwplayer.js"></script>
    <script src="assets/libs/jwplayer/jwplayer.core.controls.js"></script>
    ' ?0                  	;0	<<54
57  35   ECHO/40                   ?0        55:'    <style>html { overflow: hidden; }</style>
    <body>
        ' ?0                  	;0
58  36   JMPZ/43                   ?0        16?2                 ?60                 	;0	>>60
59  37   GOTO/253                  ?0        ?222                 ?56                 	;0
60  39   GOTO/253                  ?0        ?220                 ?57                 	;0	<<58
61  41   INIT_FCALL_BY_NAME/59     ?0        ?0                   58:'e6D500e19634D513'	;0
62  41   DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
63  41   JMPZ/43                   ?0        $36                  ?65                 	;0	>>65
64  42   GOTO/253                  ?0        ?67                  ?60                 	;0
65  44   INIT_FCALL_BY_NAME/59     ?0        ?0                   61:'E72f42A93714bA87'	;0	<<63
66  44   DO_FCALL_BY_NAME/131      ?25       ?0                   ?0                  	;0
67  46   INIT_FCALL_BY_NAME/59     ?0        ?0                   63:'time'           	;0
68  46   DO_FCALL_BY_NAME/131      $38=      ?0                   ?0                  	;0
69  46   ADD/1                     #39=      $38                  65:14400            	;0
70  46   ASSIGN/38                 ?28       16?3                 #39                 	;0
71  47   INIT_FCALL_BY_NAME/59     ?0        ?0                   66:'session_id'     	;0
72  47   DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
73  47   INIT_ARRAY/71             #42=      $41                  68:'session_id'     	;18
74  47   ADD_ARRAY_ELEMENT/72      #42=      16?3                 69:'expires'        	;0
75  47   INIT_FCALL_BY_NAME/59     ?0        ?0                   70:'intval'         	;1
76  47   FETCH_STATIC_PROP_FUNC_ARG/177 $43=      72:'rRequest'        73:'XUI'            	;1
77  47   FETCH_DIM_FUNC_ARG/93     $44=      $43                  75:'id'             	;1
78  47   SEND_VAR_EX/66            ?80       $44                  ?1                  	;0
79  47   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
80  47   ADD_ARRAY_ELEMENT/72      #42=      $45                  76:'stream_id'      	;0
81  47   INIT_STATIC_METHOD_CALL/113 ?0        77:'XUI'             79:'AD72B4259CA295B2'	;0
82  47   DO_FCALL/60               $46=      ?0                   ?0                  	;0
83  47   ADD_ARRAY_ELEMENT/72      #42=      $46                  81:'ip'             	;0
84  47   ASSIGN/38                 ?35       16?0                 #42                 	;0
85  48   GOTO/253                  ?0        ?152                 ?82                 	;0
86  50   EXIT/79                   ?0        ?0                   ?0                  	;0
87  53   CONCAT/8                  #48=      16?5                 83:'://'            	;0
88  53   FETCH_DIM_R/81            $49=      16?6                 16?7                	;0
89  53   FETCH_DIM_R/81            $50=      $49                  84:'domain_name'    	;0
90  53   JMPZ/43                   ?0        $50                  ?100                	;0	>>100
91  53   INIT_FCALL_BY_NAME/59     ?0        ?0                   85:'explode'        	;2
92  53   SEND_VAL_EX/116           ?80       87:','               ?1                  	;0
93  53   FETCH_DIM_FUNC_ARG/93     $51=      16?6                 16?7                	;2
94  53   FETCH_DIM_FUNC_ARG/93     $52=      $51                  88:'domain_name'    	;2
95  53   SEND_VAR_EX/66            ?96       $52                  ?2                  	;0
96  53   DO_FCALL_BY_NAME/131      $53=      ?0                   ?0                  	;0
97  53   FETCH_DIM_R/81            $54=      $53                  89:0                	;0
98  53   QM_ASSIGN/22              #55=      $54                  ?0                  	;0
99  53   JMP/42                    ?0        ?103                 ?0                  	;0	>>103
100 53   FETCH_DIM_R/81            $56=      16?6                 16?7                	;0	<<90
101 53   FETCH_DIM_R/81            $57=      $56                  90:'server_ip'      	;0
102 53   QM_ASSIGN/22              #55=      $57                  ?0                  	;0
103 53   CONCAT/8                  #58=      #48                  #55                 	;0	<<99
104 53   CONCAT/8                  #59=      #58                  91:':'              	;0
105 53   INIT_FCALL_BY_NAME/59     ?0        ?0                   92:'a41659d47a278cEB'	;0
106 53   DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
107 53   JMPZ/43                   ?0        $60                  ?112                	;0	>>112
108 53   FETCH_DIM_R/81            $61=      16?6                 16?7                	;0
109 53   FETCH_DIM_R/81            $62=      $61                  94:'https_broadcast_port'	;0
110 53   QM_ASSIGN/22              #63=      $62                  ?0                  	;0
111 53   JMP/42                    ?0        ?115                 ?0                  	;0	>>115
112 53   FETCH_DIM_R/81            $64=      16?6                 16?7                	;0	<<107
113 53   FETCH_DIM_R/81            $65=      $64                  95:'http_broadcast_port'	;0
114 53   QM_ASSIGN/22              #63=      $65                  ?0                  	;0
115 53   CONCAT/8                  #66=      #59                  #63                 	;0	<<111
116 53   CONCAT/8                  #67=      #66                  96:'/admin/'        	;0
117 53   FETCH_STATIC_PROP_R/173   $68=      97:'rRequest'        98:'XUI'            	;0
118 53   FETCH_DIM_R/81            $69=      $68                  100:'type'          	;0
119 53   IS_EQUAL/17               #70=      $69                  101:'live'          	;0
120 53   JMPZ/43                   ?0        #70                  ?123                	;0	>>123
121 53   QM_ASSIGN/22              #71=      102:'live'           ?0                  	;0
122 53   JMP/42                    ?0        ?131                 ?0                  	;0	>>131
123 53   FETCH_STATIC_PROP_R/173   $72=      103:'rRequest'       104:'XUI'           	;0	<<120
124 53   FETCH_DIM_R/81            $73=      $72                  106:'type'          	;0
125 53   IS_EQUAL/17               #74=      $73                  107:'timeshift'     	;0
126 53   JMPZ/43                   ?0        #74                  ?129                	;0	>>129
127 53   QM_ASSIGN/22              #75=      108:'timeshift'      ?0                  	;0
128 53   JMP/42                    ?0        ?130                 ?0                  	;0	>>130
129 53   QM_ASSIGN/22              #75=      109:'vod'            ?0                  	;0	<<126
130 53   QM_ASSIGN/22              #71=      #75                  ?0                  	;0	<<128
131 53   CONCAT/8                  #76=      #67                  #71                 	;0	<<122
132 53   CONCAT/8                  #77=      #76                  110:'?uitoken='     	;0
133 53   CONCAT/8                  #78=      #77                  16?8                	;0
134 53   FETCH_STATIC_PROP_R/173   $79=      111:'rRequest'       112:'XUI'           	;0
135 53   FETCH_DIM_R/81            $80=      $79                  114:'type'          	;0
136 53   IS_EQUAL/17               #81=      $80                  115:'live'          	;0
137 53   JMPZ/43                   ?0        #81                  ?140                	;0	>>140
138 53   QM_ASSIGN/22              #82=      116:'&extension=.m3u8' ?0                  	;0
139 53   JMP/42                    ?0        ?141                 ?0                  	;0	>>141
140 53   QM_ASSIGN/22              #82=      117:''               ?0                  	;0	<<137
141 53   CONCAT/8                  #83=      #78                  #82                 	;0	<<139
142 53   ASSIGN/38                 ?72       16?4                 #83                 	;0
143 54   ECHO/40                   ?0        118:'<html>
    <script src="assets/js/vendor.min.js"></script>
    ' ?0                  	;0
144 55   GOTO/253                  ?0        ?54                  ?119                	;0
145 57   ECHO/40                   ?0        120:'" controls></video>
        ' ?0                  	;0
146 59   ECHO/40                   ?0        121:'    </body>
    <script>
    $(document).ready(function() {
        ' ?0                  	;0
147 60   BOOL_NOT/13               #85=      16?2                 ?0                  	;0
148 60   JMPZ/43                   ?0        #85                  ?150                	;0	>>150
149 61   GOTO/253                  ?0        ?262                 ?122                	;0
150 63   ECHO/40                   ?0        123:'        $("video").trigger("play");
        ' ?0                  	;0	<<148
151 64   GOTO/253                  ?0        ?261                 ?124                	;0
152 66   ASSIGN/38                 ?74       16?2                 125:false           	;0
153 67   FETCH_STATIC_PROP_IS/176  $87=      126:'rRequest'       127:'XUI'           	;0
154 67   ISSET_ISEMPTY_DIM_OBJ/115 #88=      $87                  129:'container'     	;33554432
155 67   BOOL_NOT/13               #89=      #88                  ?0                  	;0
156 67   JMPZ/43                   ?0        #89                  ?158                	;0	>>158
157 68   GOTO/253                  ?0        ?25                  ?130                	;0
158 70   FETCH_STATIC_PROP_R/173   $91=      132:'rRequest'       133:'XUI'           	;0	<<156
159 70   FETCH_DIM_R/81            $92=      $91                  135:'container'     	;0
160 70   ASSIGN_DIM/147            ?78       16?0                 131:'container'     	;0
161 70   OP_DATA/137               ?0        $92                  ?0                  	;0
162 71   FETCH_DIM_R/81            $93=      16?0                 136:'container'     	;0
163 71   IS_NOT_EQUAL/18           #94=      $93                  137:'mp4'           	;0
164 71   BOOL_NOT/13               #95=      #94                  ?0                  	;0
165 71   JMPZ/43                   ?0        #95                  ?167                	;0	>>167
166 72   GOTO/253                  ?0        ?25                  ?138                	;0
167 74   ASSIGN/38                 ?84       16?2                 139:true            	;0	<<165
168 75   GOTO/253                  ?0        ?25                  ?140                	;0
169 78   INIT_STATIC_METHOD_CALL/113 ?0        141:'Xui\\Functions' 143:'encrypt'       	;3
170 78   INIT_FCALL_BY_NAME/59     ?0        ?0                   145:'json_encode'   	;1
171 78   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
172 78   DO_FCALL_BY_NAME/131      $97=      ?0                   ?0                  	;0
173 78   SEND_VAR_NO_REF_EX/50     ?80       $97                  ?1                  	;0
174 78   FETCH_STATIC_PROP_FUNC_ARG/177 $98=      147:'rSettings'      148:'XUI'           	;2
175 78   FETCH_DIM_FUNC_ARG/93     $99=      $98                  150:'live_streaming_pass'	;2
176 78   SEND_VAR_EX/66            ?96       $99                  ?2                  	;0
177 78   FETCH_CONSTANT/99         #100=     ?0                   151:'OPENSSL_EXTRA' 	;16
178 78   SEND_VAL_EX/116           ?112      #100                 ?3                  	;0
179 78   DO_FCALL/60               $101=     ?0                   ?0                  	;0
180 78   ASSIGN/38                 ?90       16?8                 $101                	;0
181 79   BOOL_NOT/13               #103=     16?9                 ?0                  	;0
182 79   JMPZ/43                   ?0        #103                 ?184                	;0	>>184
183 80   GOTO/253                  ?0        ?87                  ?154                	;0
184 82   FETCH_DIM_R/81            $104=     16?6                 16?7                	;0	<<182
185 82   FETCH_DIM_R/81            $105=     $104                 155:'server_ip'     	;0
186 82   CONCAT/8                  #106=     156:'http://'        $105                	;0
187 82   CONCAT/8                  #107=     #106                 157:':'             	;0
188 82   FETCH_DIM_R/81            $108=     16?6                 16?7                	;0
189 82   FETCH_DIM_R/81            $109=     $108                 158:'http_broadcast_port'	;0
190 82   CONCAT/8                  #110=     #107                 $109                	;0
191 82   CONCAT/8                  #111=     #110                 159:'/admin/live?password='	;0
192 82   FETCH_STATIC_PROP_R/173   $112=     160:'rSettings'      161:'XUI'           	;0
193 82   FETCH_DIM_R/81            $113=     $112                 163:'live_streaming_pass'	;0
194 82   CONCAT/8                  #114=     #111                 $113                	;0
195 82   CONCAT/8                  #115=     #114                 164:'&stream='      	;0
196 82   INIT_FCALL_BY_NAME/59     ?0        ?0                   165:'intval'        	;1
197 82   FETCH_STATIC_PROP_FUNC_ARG/177 $116=     167:'rRequest'       168:'XUI'           	;1
198 82   FETCH_DIM_FUNC_ARG/93     $117=     $116                 170:'id'            	;1
199 82   SEND_VAR_EX/66            ?80       $117                 ?1                  	;0
200 82   DO_FCALL_BY_NAME/131      $118=     ?0                   ?0                  	;0
201 82   CONCAT/8                  #119=     #115                 $118                	;0
202 82   CONCAT/8                  #120=     #119                 171:'&extension=.m3u8&odstart=1'	;0
203 82   ASSIGN/38                 ?109      16?10                #120                	;0
204 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   172:'intval'        	;1
205 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   174:'file_get_contents'	;3
206 83   SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
207 83   SEND_VAL_EX/116           ?96       176:false            ?2                  	;0
208 83   INIT_FCALL_BY_NAME/59     ?0        ?0                   177:'stream_context_create'	;1
209 83   SEND_VAL_EX/116           ?80       179:array (
  'http' => 
  array (
    'timeout' => 20,
  ),
) ?1                  	;0
210 83   DO_FCALL_BY_NAME/131      $122=     ?0                   ?0                  	;0
211 83   SEND_VAR_NO_REF_EX/50     ?112      $122                 ?3                  	;0
212 83   DO_FCALL_BY_NAME/131      $123=     ?0                   ?0                  	;0
213 83   SEND_VAR_NO_REF_EX/50     ?80       $123                 ?1                  	;0
214 83   DO_FCALL_BY_NAME/131      $124=     ?0                   ?0                  	;0
215 83   IS_EQUAL/17               #125=     $124                 180:0               	;0
216 83   BOOL_NOT/13               #126=     #125                 ?0                  	;0
217 83   JMPZ/43                   ?0        #126                 ?219                	;0	>>219
218 84   GOTO/253                  ?0        ?87                  ?181                	;0
219 86   GOTO/253                  ?0        ?86                  ?182                	;0	<<217
220 88   ECHO/40                   ?0        183:'        <div id="now__playing__player"></div>
        ' ?0                  	;0
221 89   GOTO/253                  ?0        ?146                 ?184                	;0
222 91   ECHO/40                   ?0        185:'        <video id="video" width="100%" height="100%" src="' ?0                  	;0
223 92   ECHO/40                   ?0        16?4                 ?0                  	;0
224 93   GOTO/253                  ?0        ?145                 ?186                	;0
225 95   ASSIGN/38                 ?115      16?7                 187:NULL            	;0
226 96   INIT_METHOD_CALL/112      ?0        16?1                 188:'get_rows'      	;0
227 96   DO_FCALL/60               $128=     ?0                   ?0                  	;0
228 96   FE_RESET_R/77             $129=     $128                 ?248                	;0
229 96   FE_FETCH_R/78             ?0        $129                 16?11               	;248	>>248	<<247
230 97   FETCH_DIM_R/81            $130=     16?11                190:'server_id'     	;0
231 97   FETCH_CONSTANT/99         #131=     ?0                   191:'SERVER_ID'     	;16
232 97   IS_EQUAL/17               #132=     $130                 #131                	;0
233 97   JMPZ/43                   ?0        #132                 ?236                	;0	>>236
234 98   NOP/0                     ?0        ?0                   ?0                  	;1
235 98   GOTO/253                  ?0        ?243                 ?194                	;0
236 100  JMPZ/43                   ?0        16?7                 ?239                	;0	>>239	<<233
237 101  NOP/0                     ?0        ?0                   ?0                  	;1
238 101  GOTO/253                  ?0        ?241                 ?195                	;0
239 103  FETCH_DIM_R/81            $133=     16?11                196:'server_id'     	;0	<<236
240 103  ASSIGN/38                 ?122      16?7                 $133                	;0
241 105  NOP/0                     ?0        ?0                   ?0                  	;1
242 105  GOTO/253                  ?0        ?245                 ?197                	;0
243 107  FETCH_DIM_R/81            $135=     16?11                198:'server_id'     	;0
244 107  ASSIGN/38                 ?124      16?7                 $135                	;0
245 109  FETCH_DIM_R/81            $137=     16?11                199:'on_demand'     	;0
246 109  ASSIGN/38                 ?126      16?9                 $137                	;0
247 110  JMP/42                    ?0        ?229                 ?0                  	;0	>>229
248 110  FE_FREE/127               ?0        $129                 ?0                  	;0	<<228
249 113  JMPZ/43                   ?0        16?7                 ?251                	;0	>>251
250 114  GOTO/253                  ?0        ?169                 ?200                	;0
251 116  EXIT/79                   ?0        ?0                   ?0                  	;0	<<249
252 117  GOTO/253                  ?0        ?169                 ?201                	;0
253 119  INCLUDE_OR_EVAL/73        ?127      202:'session.php'    ?0                  	;2	<<0
254 120  INCLUDE_OR_EVAL/73        ?128      203:'functions.php'  ?0                  	;2
255 121  FETCH_STATIC_PROP_IS/176  $141=     204:'rRequest'       205:'XUI'           	;0
256 121  ISSET_ISEMPTY_DIM_OBJ/115 #142=     $141                 207:'id'            	;33554432
257 121  JMPZ/43                   ?0        #142                 ?259                	;0	>>259
258 122  GOTO/253                  ?0        ?260                 ?208                	;0
259 124  EXIT/79                   ?0        ?0                   ?0                  	;0	<<257
260 126  GOTO/253                  ?0        ?61                  ?209                	;0
261 128  GOTO/253                  ?0        ?53                  ?210                	;0
262 130  ECHO/40                   ?0        211:'        var rPlayer = jwplayer("now__playing__player");
        rPlayer.setup({
            "file": "' ?0                  	;0
263 131  ECHO/40                   ?0        16?4                 ?0                  	;0
264 132  ECHO/40                   ?0        212:'",
            "type": "' ?0                  	;0
265 133  GOTO/253                  ?0        ?35                  ?213                	;0
266 135  GOTO/253                  ?0        ?273                 ?214                	;0
267 137  INIT_METHOD_CALL/112      ?0        16?1                 215:'query'         	;2
268 137  SEND_VAL_EX/116           ?80       217:'SELECT `server_id`, `on_demand` FROM `streams_servers` WHERE ((`streams_servers`.`monitor_pid` > 0 AND `streams_servers`.`pid` > 0) OR (`streams_servers`.`on_demand` = 1)) AND `stream_id` = ?;' ?1                  	;0
269 137  FETCH_STATIC_PROP_FUNC_ARG/177 $143=     218:'rRequest'       219:'XUI'           	;2
270 137  FETCH_DIM_FUNC_ARG/93     $144=     $143                 221:'id'            	;2
271 137  SEND_VAR_EX/66            ?96       $144                 ?2                  	;0
272 137  DO_FCALL/60               ?133      ?0                   ?0                  	;0
273 139  ASSIGN/38                 ?134      16?9                 222:false           	;0
274 140  GOTO/253                  ?0        ?225                 ?223                	;0
275 142  ECHO/40                   ?0        224:'    });
    </script>
</html>' ?0                  	;0
276 143  NOP/0                     ?0        225:1                ?0                  	;4294967295
*/

?>