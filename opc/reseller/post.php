<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?320                 ?0                  	;0	>>320
1   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'json_decode'     	;2
2   5    INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'file_get_contents'	;1
3   5    SEND_VAL_EX/116           ?80       5:'php://input'      ?1                  	;0
4   5    DO_FCALL_BY_NAME/131      $9=       ?0                   ?0                  	;0
5   5    SEND_VAR_NO_REF_EX/50     ?80       $9                   ?1                  	;0
6   5    SEND_VAL_EX/116           ?96       6:true               ?2                  	;0
7   5    DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
8   5    ASSIGN/38                 ?2        16?0                 $10                 	;0
9   7    BOOL_NOT/13               #12=      16?0                 ?0                  	;0
10  7    JMPZ/43                   ?0        #12                  ?12                 	;0	>>12
11  8    GOTO/253                  ?0        ?349                 ?7                  	;0
12  10   SWITCH_STRING/188         ?0        16?1                 8:array (
  'edit_profile' => 26,
  'line' => 83,
  'mag' => 117,
  'enigma' => 151,
  'ticket' => 185,
  'user' => 226,
)	;260	<<10
13  11   CASE/48                   #13=      16?1                 9:'edit_profile'    	;0	>>15
14  11   JMPNZ/44                  ?0        #13                  ?26                 	;0	>>26
15  33   CASE/48                   #13=      16?1                 10:'line'           	;0	>>17	<<13
16  33   JMPNZ/44                  ?0        #13                  ?83                 	;0	>>83
17  45   CASE/48                   #13=      16?1                 11:'mag'            	;0	>>19	<<15
18  45   JMPNZ/44                  ?0        #13                  ?117                	;0	>>117
19  57   CASE/48                   #13=      16?1                 12:'enigma'         	;0	>>21	<<17
20  57   JMPNZ/44                  ?0        #13                  ?151                	;0	>>151
21  69   CASE/48                   #13=      16?1                 13:'ticket'         	;0	>>23	<<19
22  69   JMPNZ/44                  ?0        #13                  ?185                	;0	>>185
23  81   CASE/48                   #13=      16?1                 14:'user'           	;0	>>25	<<21
24  81   JMPNZ/44                  ?0        #13                  ?226                	;0	>>226
25  81   JMP/42                    ?0        ?260                 ?0                  	;0	>>260	<<23
26  12   GOTO/253                  ?0        ?27                  ?15                 	;0	<<14
27  14   INIT_STATIC_METHOD_CALL/113 ?0        16:'ResellerAPI'     18:'d587583533E150c8'	;1
28  14   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
29  14   DO_FCALL/60               $14=      ?0                   ?0                  	;0
30  14   ASSIGN/38                 ?6        16?2                 $14                 	;0
31  15   INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'setcookie'      	;3
32  15   SEND_VAL_EX/116           ?80       22:'hue'             ?1                  	;0
33  15   FETCH_DIM_FUNC_ARG/93     $16=      16?0                 23:'hue'            	;2
34  15   SEND_VAR_EX/66            ?96       $16                  ?2                  	;0
35  15   INIT_FCALL_BY_NAME/59     ?0        ?0                   24:'time'           	;0
36  15   DO_FCALL_BY_NAME/131      $17=      ?0                   ?0                  	;0
37  15   ADD/1                     #18=      $17                  26:315360000        	;0
38  15   SEND_VAL_EX/116           ?112      #18                  ?3                  	;0
39  15   DO_FCALL_BY_NAME/131      ?10       ?0                   ?0                  	;0
40  16   INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'setcookie'      	;3
41  16   SEND_VAL_EX/116           ?80       29:'theme'           ?1                  	;0
42  16   FETCH_DIM_FUNC_ARG/93     $20=      16?0                 30:'theme'          	;2
43  16   SEND_VAR_EX/66            ?96       $20                  ?2                  	;0
44  16   INIT_FCALL_BY_NAME/59     ?0        ?0                   31:'time'           	;0
45  16   DO_FCALL_BY_NAME/131      $21=      ?0                   ?0                  	;0
46  16   ADD/1                     #22=      $21                  33:315360000        	;0
47  16   SEND_VAL_EX/116           ?112      #22                  ?3                  	;0
48  16   DO_FCALL_BY_NAME/131      ?14       ?0                   ?0                  	;0
49  17   FETCH_DIM_R/81            $24=      16?2                 34:'status'         	;0
50  17   FETCH_CONSTANT/99         #25=      ?0                   35:'STATUS_SUCCESS' 	;16
51  17   IS_EQUAL/17               #26=      $24                  #25                 	;0
52  17   JMPZ/43                   ?0        #26                  ?54                 	;0	>>54
53  18   GOTO/253                  ?0        ?67                  ?38                 	;0
54  20   INIT_FCALL_BY_NAME/59     ?0        ?0                   39:'json_encode'    	;1	<<52
55  20   INIT_ARRAY/71             #27=      41:false             42:'result'         	;14
56  20   FETCH_DIM_R/81            $28=      16?2                 43:'data'           	;0
57  20   ADD_ARRAY_ELEMENT/72      #27=      $28                  44:'data'           	;0
58  20   FETCH_DIM_R/81            $29=      16?2                 45:'status'         	;0
59  20   ADD_ARRAY_ELEMENT/72      #27=      $29                  46:'status'         	;0
60  20   SEND_VAL_EX/116           ?80       #27                  ?1                  	;0
61  20   DO_FCALL_BY_NAME/131      $30=      ?0                   ?0                  	;0
62  20   ECHO/40                   ?0        $30                  ?0                  	;0
63  21   GOTO/253                  ?0        ?65                  ?47                 	;0
64  24   GOTO/253                  ?0        ?83                  ?48                 	;0
65  26   EXIT/79                   ?0        ?0                   ?0                  	;0
66  27   GOTO/253                  ?0        ?64                  ?49                 	;0
67  29   INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'json_encode'    	;1
68  29   INIT_ARRAY/71             #31=      52:true              53:'result'         	;18
69  29   INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'intval'         	;1
70  29   FETCH_DIM_FUNC_ARG/93     $32=      16?2                 56:'status'         	;1
71  29   SEND_VAR_EX/66            ?80       $32                  ?1                  	;0
72  29   DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
73  29   CONCAT/8                  #34=      57:'edit_profile?status=' $33                 	;0
74  29   ADD_ARRAY_ELEMENT/72      #31=      #34                  58:'location'       	;0
75  29   FETCH_DIM_R/81            $35=      16?2                 59:'status'         	;0
76  29   ADD_ARRAY_ELEMENT/72      #31=      $35                  60:'status'         	;0
77  29   ADD_ARRAY_ELEMENT/72      #31=      61:true              62:'reload'         	;0
78  29   SEND_VAL_EX/116           ?80       #31                  ?1                  	;0
79  29   DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
80  29   ECHO/40                   ?0        $36                  ?0                  	;0
81  30   EXIT/79                   ?0        ?0                   ?0                  	;0
82  31   GOTO/253                  ?0        ?64                  ?63                 	;0
83  34   INIT_STATIC_METHOD_CALL/113 ?0        64:'ResellerAPI'     66:'fcCAA0f750efa5B7'	;1	<<16
84  34   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
85  34   DO_FCALL/60               $37=      ?0                   ?0                  	;0
86  34   ASSIGN/38                 ?29       16?2                 $37                 	;0
87  35   FETCH_DIM_R/81            $39=      16?2                 68:'status'         	;0
88  35   FETCH_CONSTANT/99         #40=      ?0                   69:'STATUS_SUCCESS' 	;16
89  35   IS_EQUAL/17               #41=      $39                  #40                 	;0
90  35   JMPZ/43                   ?0        #41                  ?92                 	;0	>>92
91  36   GOTO/253                  ?0        ?103                 ?72                 	;0
92  38   INIT_FCALL_BY_NAME/59     ?0        ?0                   73:'json_encode'    	;1	<<90
93  38   INIT_ARRAY/71             #42=      75:false             76:'result'         	;14
94  38   FETCH_DIM_R/81            $43=      16?2                 77:'data'           	;0
95  38   ADD_ARRAY_ELEMENT/72      #42=      $43                  78:'data'           	;0
96  38   FETCH_DIM_R/81            $44=      16?2                 79:'status'         	;0
97  38   ADD_ARRAY_ELEMENT/72      #42=      $44                  80:'status'         	;0
98  38   SEND_VAL_EX/116           ?80       #42                  ?1                  	;0
99  38   DO_FCALL_BY_NAME/131      $45=      ?0                   ?0                  	;0
100 38   ECHO/40                   ?0        $45                  ?0                  	;0
101 39   EXIT/79                   ?0        ?0                   ?0                  	;0
102 40   GOTO/253                  ?0        ?117                 ?81                 	;0
103 42   INIT_FCALL_BY_NAME/59     ?0        ?0                   82:'json_encode'    	;1
104 42   INIT_ARRAY/71             #46=      84:true              85:'result'         	;14
105 42   INIT_FCALL_BY_NAME/59     ?0        ?0                   86:'intval'         	;1
106 42   FETCH_DIM_FUNC_ARG/93     $47=      16?2                 88:'status'         	;1
107 42   SEND_VAR_EX/66            ?80       $47                  ?1                  	;0
108 42   DO_FCALL_BY_NAME/131      $48=      ?0                   ?0                  	;0
109 42   CONCAT/8                  #49=      89:'lines?status='   $48                 	;0
110 42   ADD_ARRAY_ELEMENT/72      #46=      #49                  90:'location'       	;0
111 42   FETCH_DIM_R/81            $50=      16?2                 91:'status'         	;0
112 42   ADD_ARRAY_ELEMENT/72      #46=      $50                  92:'status'         	;0
113 42   SEND_VAL_EX/116           ?80       #46                  ?1                  	;0
114 42   DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
115 42   ECHO/40                   ?0        $51                  ?0                  	;0
116 43   EXIT/79                   ?0        ?0                   ?0                  	;0
117 46   INIT_STATIC_METHOD_CALL/113 ?0        93:'ResellerAPI'     95:'B087C00F20554A9B'	;1	<<18
118 46   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
119 46   DO_FCALL/60               $52=      ?0                   ?0                  	;0
120 46   ASSIGN/38                 ?44       16?2                 $52                 	;0
121 47   FETCH_DIM_R/81            $54=      16?2                 97:'status'         	;0
122 47   FETCH_CONSTANT/99         #55=      ?0                   98:'STATUS_SUCCESS' 	;16
123 47   IS_EQUAL/17               #56=      $54                  #55                 	;0
124 47   JMPZ/43                   ?0        #56                  ?126                	;0	>>126
125 48   GOTO/253                  ?0        ?137                 ?101                	;0
126 50   INIT_FCALL_BY_NAME/59     ?0        ?0                   102:'json_encode'   	;1	<<124
127 50   INIT_ARRAY/71             #57=      104:false            105:'result'        	;14
128 50   FETCH_DIM_R/81            $58=      16?2                 106:'data'          	;0
129 50   ADD_ARRAY_ELEMENT/72      #57=      $58                  107:'data'          	;0
130 50   FETCH_DIM_R/81            $59=      16?2                 108:'status'        	;0
131 50   ADD_ARRAY_ELEMENT/72      #57=      $59                  109:'status'        	;0
132 50   SEND_VAL_EX/116           ?80       #57                  ?1                  	;0
133 50   DO_FCALL_BY_NAME/131      $60=      ?0                   ?0                  	;0
134 50   ECHO/40                   ?0        $60                  ?0                  	;0
135 51   EXIT/79                   ?0        ?0                   ?0                  	;0
136 52   GOTO/253                  ?0        ?151                 ?110                	;0
137 54   INIT_FCALL_BY_NAME/59     ?0        ?0                   111:'json_encode'   	;1
138 54   INIT_ARRAY/71             #61=      113:true             114:'result'        	;14
139 54   INIT_FCALL_BY_NAME/59     ?0        ?0                   115:'intval'        	;1
140 54   FETCH_DIM_FUNC_ARG/93     $62=      16?2                 117:'status'        	;1
141 54   SEND_VAR_EX/66            ?80       $62                  ?1                  	;0
142 54   DO_FCALL_BY_NAME/131      $63=      ?0                   ?0                  	;0
143 54   CONCAT/8                  #64=      118:'mags?status='   $63                 	;0
144 54   ADD_ARRAY_ELEMENT/72      #61=      #64                  119:'location'      	;0
145 54   FETCH_DIM_R/81            $65=      16?2                 120:'status'        	;0
146 54   ADD_ARRAY_ELEMENT/72      #61=      $65                  121:'status'        	;0
147 54   SEND_VAL_EX/116           ?80       #61                  ?1                  	;0
148 54   DO_FCALL_BY_NAME/131      $66=      ?0                   ?0                  	;0
149 54   ECHO/40                   ?0        $66                  ?0                  	;0
150 55   EXIT/79                   ?0        ?0                   ?0                  	;0
151 58   INIT_STATIC_METHOD_CALL/113 ?0        122:'ResellerAPI'    124:'F5D44bE8B59f4E62'	;1	<<20
152 58   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
153 58   DO_FCALL/60               $67=      ?0                   ?0                  	;0
154 58   ASSIGN/38                 ?59       16?2                 $67                 	;0
155 59   FETCH_DIM_R/81            $69=      16?2                 126:'status'        	;0
156 59   FETCH_CONSTANT/99         #70=      ?0                   127:'STATUS_SUCCESS'	;16
157 59   IS_EQUAL/17               #71=      $69                  #70                 	;0
158 59   JMPZ/43                   ?0        #71                  ?160                	;0	>>160
159 60   GOTO/253                  ?0        ?171                 ?130                	;0
160 62   INIT_FCALL_BY_NAME/59     ?0        ?0                   131:'json_encode'   	;1	<<158
161 62   INIT_ARRAY/71             #72=      133:false            134:'result'        	;14
162 62   FETCH_DIM_R/81            $73=      16?2                 135:'data'          	;0
163 62   ADD_ARRAY_ELEMENT/72      #72=      $73                  136:'data'          	;0
164 62   FETCH_DIM_R/81            $74=      16?2                 137:'status'        	;0
165 62   ADD_ARRAY_ELEMENT/72      #72=      $74                  138:'status'        	;0
166 62   SEND_VAL_EX/116           ?80       #72                  ?1                  	;0
167 62   DO_FCALL_BY_NAME/131      $75=      ?0                   ?0                  	;0
168 62   ECHO/40                   ?0        $75                  ?0                  	;0
169 63   EXIT/79                   ?0        ?0                   ?0                  	;0
170 64   GOTO/253                  ?0        ?185                 ?139                	;0
171 66   INIT_FCALL_BY_NAME/59     ?0        ?0                   140:'json_encode'   	;1
172 66   INIT_ARRAY/71             #76=      142:true             143:'result'        	;14
173 66   INIT_FCALL_BY_NAME/59     ?0        ?0                   144:'intval'        	;1
174 66   FETCH_DIM_FUNC_ARG/93     $77=      16?2                 146:'status'        	;1
175 66   SEND_VAR_EX/66            ?80       $77                  ?1                  	;0
176 66   DO_FCALL_BY_NAME/131      $78=      ?0                   ?0                  	;0
177 66   CONCAT/8                  #79=      147:'enigmas?status=' $78                 	;0
178 66   ADD_ARRAY_ELEMENT/72      #76=      #79                  148:'location'      	;0
179 66   FETCH_DIM_R/81            $80=      16?2                 149:'status'        	;0
180 66   ADD_ARRAY_ELEMENT/72      #76=      $80                  150:'status'        	;0
181 66   SEND_VAL_EX/116           ?80       #76                  ?1                  	;0
182 66   DO_FCALL_BY_NAME/131      $81=      ?0                   ?0                  	;0
183 66   ECHO/40                   ?0        $81                  ?0                  	;0
184 67   EXIT/79                   ?0        ?0                   ?0                  	;0
185 70   INIT_STATIC_METHOD_CALL/113 ?0        151:'ResellerAPI'    153:'f29b6959409FC688'	;1	<<22
186 70   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
187 70   DO_FCALL/60               $82=      ?0                   ?0                  	;0
188 70   ASSIGN/38                 ?74       16?2                 $82                 	;0
189 71   FETCH_DIM_R/81            $84=      16?2                 155:'status'        	;0
190 71   FETCH_CONSTANT/99         #85=      ?0                   156:'STATUS_SUCCESS'	;16
191 71   IS_EQUAL/17               #86=      $84                  #85                 	;0
192 71   JMPZ/43                   ?0        #86                  ?194                	;0	>>194
193 72   GOTO/253                  ?0        ?205                 ?159                	;0
194 74   INIT_FCALL_BY_NAME/59     ?0        ?0                   160:'json_encode'   	;1	<<192
195 74   INIT_ARRAY/71             #87=      162:false            163:'result'        	;14
196 74   FETCH_DIM_R/81            $88=      16?2                 164:'data'          	;0
197 74   ADD_ARRAY_ELEMENT/72      #87=      $88                  165:'data'          	;0
198 74   FETCH_DIM_R/81            $89=      16?2                 166:'status'        	;0
199 74   ADD_ARRAY_ELEMENT/72      #87=      $89                  167:'status'        	;0
200 74   SEND_VAL_EX/116           ?80       #87                  ?1                  	;0
201 74   DO_FCALL_BY_NAME/131      $90=      ?0                   ?0                  	;0
202 74   ECHO/40                   ?0        $90                  ?0                  	;0
203 75   EXIT/79                   ?0        ?0                   ?0                  	;0
204 76   GOTO/253                  ?0        ?226                 ?168                	;0
205 78   INIT_FCALL_BY_NAME/59     ?0        ?0                   169:'json_encode'   	;1
206 78   INIT_ARRAY/71             #91=      171:true             172:'result'        	;14
207 78   INIT_FCALL_BY_NAME/59     ?0        ?0                   173:'intval'        	;1
208 78   FETCH_DIM_FUNC_ARG/93     $92=      16?2                 175:'data'          	;1
209 78   FETCH_DIM_FUNC_ARG/93     $93=      $92                  176:'insert_id'     	;1
210 78   SEND_VAR_EX/66            ?80       $93                  ?1                  	;0
211 78   DO_FCALL_BY_NAME/131      $94=      ?0                   ?0                  	;0
212 78   CONCAT/8                  #95=      177:'ticket_view?id=' $94                 	;0
213 78   CONCAT/8                  #96=      #95                  178:'&status='      	;0
214 78   INIT_FCALL_BY_NAME/59     ?0        ?0                   179:'intval'        	;1
215 78   FETCH_DIM_FUNC_ARG/93     $97=      16?2                 181:'status'        	;1
216 78   SEND_VAR_EX/66            ?80       $97                  ?1                  	;0
217 78   DO_FCALL_BY_NAME/131      $98=      ?0                   ?0                  	;0
218 78   CONCAT/8                  #99=      #96                  $98                 	;0
219 78   ADD_ARRAY_ELEMENT/72      #91=      #99                  182:'location'      	;0
220 78   FETCH_DIM_R/81            $100=     16?2                 183:'status'        	;0
221 78   ADD_ARRAY_ELEMENT/72      #91=      $100                 184:'status'        	;0
222 78   SEND_VAL_EX/116           ?80       #91                  ?1                  	;0
223 78   DO_FCALL_BY_NAME/131      $101=     ?0                   ?0                  	;0
224 78   ECHO/40                   ?0        $101                 ?0                  	;0
225 79   EXIT/79                   ?0        ?0                   ?0                  	;0
226 82   INIT_STATIC_METHOD_CALL/113 ?0        185:'ResellerAPI'    187:'D3824406BC4f2a23'	;1	<<24
227 82   SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
228 82   DO_FCALL/60               $102=     ?0                   ?0                  	;0
229 82   ASSIGN/38                 ?94       16?2                 $102                	;0
230 83   FETCH_DIM_R/81            $104=     16?2                 189:'status'        	;0
231 83   FETCH_CONSTANT/99         #105=     ?0                   190:'STATUS_SUCCESS'	;16
232 83   IS_EQUAL/17               #106=     $104                 #105                	;0
233 83   JMPZ/43                   ?0        #106                 ?235                	;0	>>235
234 84   GOTO/253                  ?0        ?246                 ?193                	;0
235 86   INIT_FCALL_BY_NAME/59     ?0        ?0                   194:'json_encode'   	;1	<<233
236 86   INIT_ARRAY/71             #107=     196:false            197:'result'        	;14
237 86   FETCH_DIM_R/81            $108=     16?2                 198:'data'          	;0
238 86   ADD_ARRAY_ELEMENT/72      #107=     $108                 199:'data'          	;0
239 86   FETCH_DIM_R/81            $109=     16?2                 200:'status'        	;0
240 86   ADD_ARRAY_ELEMENT/72      #107=     $109                 201:'status'        	;0
241 86   SEND_VAL_EX/116           ?80       #107                 ?1                  	;0
242 86   DO_FCALL_BY_NAME/131      $110=     ?0                   ?0                  	;0
243 86   ECHO/40                   ?0        $110                 ?0                  	;0
244 87   EXIT/79                   ?0        ?0                   ?0                  	;0
245 88   GOTO/253                  ?0        ?260                 ?202                	;0
246 90   INIT_FCALL_BY_NAME/59     ?0        ?0                   203:'json_encode'   	;1
247 90   INIT_ARRAY/71             #111=     205:true             206:'result'        	;14
248 90   INIT_FCALL_BY_NAME/59     ?0        ?0                   207:'intval'        	;1
249 90   FETCH_DIM_FUNC_ARG/93     $112=     16?2                 209:'status'        	;1
250 90   SEND_VAR_EX/66            ?80       $112                 ?1                  	;0
251 90   DO_FCALL_BY_NAME/131      $113=     ?0                   ?0                  	;0
252 90   CONCAT/8                  #114=     210:'users?status='  $113                	;0
253 90   ADD_ARRAY_ELEMENT/72      #111=     #114                 211:'location'      	;0
254 90   FETCH_DIM_R/81            $115=     16?2                 212:'status'        	;0
255 90   ADD_ARRAY_ELEMENT/72      #111=     $115                 213:'status'        	;0
256 90   SEND_VAL_EX/116           ?80       #111                 ?1                  	;0
257 90   DO_FCALL_BY_NAME/131      $116=     ?0                   ?0                  	;0
258 90   ECHO/40                   ?0        $116                 ?0                  	;0
259 91   EXIT/79                   ?0        ?0                   ?0                  	;0
260 95   GOTO/253                  ?0        ?349                 ?214                	;0	<<25
261 97   ECHO/40                   ?0        215:';
function submitForm(rType, rData, rCallback=callbackForm) {
    $.ajax({
        type: "POST",
        url: "post.php?action=" + encodeURIComponent(rType),
        data: rData,
        processData: false,
        contentType: false,
        success: function(rReturn) {
            try {
                var rJSON = $.parseJSON(rReturn);
            } catch (e) {
                var rJSON = {"status": 0, "result": false};
              }
            rCallback(rJSON);
        }
    });
}
function callbackForm(rData) {
    if (rData.location) {
        if (rData.reload) {
            window.location.href = rData.location;
        } else {
            navigate(rData.location);
        }
    } else {
        $(\':input[type="submit"]\').prop(\'disabled\', false);

        switch (window.rCurrentPage) {
            case "edit_profile":
                switch (window.rErrors[rData.status]) {
                    case "STATUS_INVALID_EMAIL":
                        showError("Please enter a valid email address.");
                        break;

                    case "STATUS_INVALID_PASSWORD":
                        showError("Your password must be at least ' ?0                  	;0
262 98   FETCH_STATIC_PROP_R/173   $117=     216:'rSettings'      217:'XUI'           	;0
263 98   FETCH_DIM_R/81            $118=     $117                 219:'pass_length'   	;0
264 98   ECHO/40                   ?0        $118                 ?0                  	;0
265 99   ECHO/40                   ?0        220:' characters long.");
                        break;

                    default:
                        showError("An error occured while processing your request.");
                        break;
                }
                break;

            case "mag":
            case "enigma":
                switch (window.rErrors[rData.status]) {
                    case "STATUS_INVALID_TYPE":
                        showError("This package is not supported.");
                        break;
                    
                    case "STATUS_NO_TRIALS":
                        showError("You cannot generate trials at this time.");
                        break;
                        
                    case "STATUS_INSUFFICIENT_CREDITS":
                        showError("You do not have enough credits to make this purchase.");
                        break;
                        
                    case "STATUS_INVALID_PACKAGE":
                        showError("Please select a valid package.");
                        break;

                    case "STATUS_INVALID_MAC":
                        showError("Please enter a valid MAC address.");
                        break;

                    case "STATUS_EXISTS_MAC":
                        showError("The MAC address you entered is already in use.");
                        break;

                    default:
                        showError("An error occured while processing your request.");
                        break;
                }
                break;

            case "ticket":
                switch (window.rErrors[rData.status]) {
                    case "STATUS_INVALID_DATA":
                        showError("Please ensure you enter both a title and message.");
                        break;

                    default:
                        showError("An error occured while processing your request.");
                        break;
                }
                break;

            case "line":
                switch (window.rErrors[rData.status]) {
                    case "STATUS_INVALID_TYPE":
                        showError("This package is not supported.");
                        break;
                    
                    case "STATUS_NO_TRIALS":
                        showError("You cannot generate trials at this time.");
                        break;
                        
                    case "STATUS_INSUFFICIENT_CREDITS":
                        showError("You do not have enough credits to make this purchase.");
                        break;
                        
                    case "STATUS_INVALID_PACKAGE":
                        showError("Please select a valid package.");
                        break;
                        
                    case "STATUS_INVALID_USERNAME":
                        showError("Username is too short! It must be at least ' ?0                  	;0
266 100  FETCH_DIM_R/81            $119=     16?3                 221:'minimum_username_length'	;0
267 100  ECHO/40                   ?0        $119                 ?0                  	;0
268 101  ECHO/40                   ?0        222:' characters long.");
                        break;
                        
                    case "STATUS_INVALID_PASSWORD":
                        showError("Password is too short! It must be at least ' ?0                  	;0
269 102  GOTO/253                  ?0        ?311                 ?223                	;0
270 104  INIT_FCALL_BY_NAME/59     ?0        ?0                   224:'session_write_close'	;0
271 104  DO_FCALL_BY_NAME/131      ?111      ?0                   ?0                  	;0
272 105  INIT_FCALL_BY_NAME/59     ?0        ?0                   226:'d60f670923ADBF13'	;0
273 105  DO_FCALL_BY_NAME/131      $121=     ?0                   ?0                  	;0
274 105  ASSIGN/38                 ?113      16?4                 $121                	;0
275 106  ASSIGN/38                 ?114      16?5                 228:array (
)       	;0
276 107  INIT_FCALL_BY_NAME/59     ?0        ?0                   229:'get_defined_constants'	;1
277 107  SEND_VAL_EX/116           ?80       231:true             ?1                  	;0
278 107  DO_FCALL_BY_NAME/131      $124=     ?0                   ?0                  	;0
279 107  FETCH_DIM_R/81            $125=     $124                 232:'user'          	;0
280 107  FE_RESET_R/77             $126=     $125                 ?299                	;0
281 107  FE_FETCH_R/78             #127=     $126                 16?6                	;299	>>299	<<298
282 107  ASSIGN/38                 ?119      16?7                 #127                	;0
283 108  INIT_FCALL_BY_NAME/59     ?0        ?0                   233:'substr'        	;3
284 108  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
285 108  SEND_VAL_EX/116           ?96       235:0                ?2                  	;0
286 108  SEND_VAL_EX/116           ?112      236:7                ?3                  	;0
287 108  DO_FCALL_BY_NAME/131      $129=     ?0                   ?0                  	;0
288 108  IS_EQUAL/17               #130=     $129                 237:'STATUS_'       	;0
289 108  BOOL_NOT/13               #131=     #130                 ?0                  	;0
290 108  JMPZ/43                   ?0        #131                 ?293                	;0	>>293
291 109  NOP/0                     ?0        ?0                   ?0                  	;1
292 109  GOTO/253                  ?0        ?298                 ?238                	;0
293 111  INIT_FCALL_BY_NAME/59     ?0        ?0                   239:'intval'        	;1	<<290
294 111  SEND_VAR_EX/66            ?80       16?6                 ?1                  	;0
295 111  DO_FCALL_BY_NAME/131      $132=     ?0                   ?0                  	;0
296 111  ASSIGN_DIM/147            ?124      16?5                 $132                	;0
297 111  OP_DATA/137               ?0        16?7                 ?0                  	;0
298 113  JMP/42                    ?0        ?281                 ?0                  	;0	>>281
299 113  FE_FREE/127               ?0        $126                 ?0                  	;0	<<280
300 116  GOTO/253                  ?0        ?332                 ?241                	;0
301 119  ECHO/40                   ?0        242:'<script>
var rCurrentPage = "' ?0                  	;0
302 120  ECHO/40                   ?0        16?4                 ?0                  	;0
303 121  ECHO/40                   ?0        243:'";
var rErrors = ' ?0                  	;0
304 122  INIT_FCALL_BY_NAME/59     ?0        ?0                   244:'json_encode'   	;1
305 122  SEND_VAR_EX/66            ?80       16?5                 ?1                  	;0
306 122  DO_FCALL_BY_NAME/131      $134=     ?0                   ?0                  	;0
307 122  ECHO/40                   ?0        $134                 ?0                  	;0
308 123  GOTO/253                  ?0        ?261                 ?246                	;0
309 125  ECHO/40                   ?0        247:' characters long.");
                        break;
                    
                    case "STATUS_INSUFFICIENT_CREDITS":
                        showError("You do not have enough credits to make this purchase.");
                        break;
                    
                    case "STATUS_INVALID_SUBRESELLER":
                        showError("You are not set up to create subresellers. Please open a ticket.");
                        break;
                    
                    case "STATUS_EXISTS_USERNAME":
                        showError("The username you selected already exists. Please use another.");
                        break;

                    default:
                        showError("An error occured while processing your request.");
                        break;
                }
                break;

            default:
                showError("An error occured while processing your request.");
                break;
        }
    }
}
</script>
' ?0                  	;0
310 126  GOTO/253                  ?0        ?356                 ?248                	;0
311 128  FETCH_DIM_R/81            $135=     16?3                 249:'minimum_password_length'	;0
312 128  ECHO/40                   ?0        $135                 ?0                  	;0
313 129  ECHO/40                   ?0        250:' characters long.");
                        break;                    

                    case "STATUS_EXISTS_USERNAME":
                        showError("The username you selected already exists. Please use another.");
                        break;

                    default:
                        showError("An error occured while processing your request.");
                        break;
                }
                break;

            case "user":
                switch (window.rErrors[rData.status]) {
                    case "STATUS_INVALID_PASSWORD":
                        showError("Password is too short! It must be at least ' ?0                  	;0
314 130  FETCH_DIM_R/81            $136=     16?3                 251:'minimum_password_length'	;0
315 130  ECHO/40                   ?0        $136                 ?0                  	;0
316 131  ECHO/40                   ?0        252:' characters long.");
                        break;
                    
                    case "STATUS_INVALID_USERNAME":
                        showError("Username is too short! It must be at least ' ?0                  	;0
317 132  FETCH_DIM_R/81            $137=     16?3                 253:'minimum_username_length'	;0
318 132  ECHO/40                   ?0        $137                 ?0                  	;0
319 133  GOTO/253                  ?0        ?309                 ?254                	;0
320 135  ECHO/40                   ?0        255:' '              ?0                  	;0	<<0
321 136  INIT_FCALL_BY_NAME/59     ?0        ?0                   256:'count'         	;1
322 136  INIT_FCALL_BY_NAME/59     ?0        ?0                   258:'get_included_files'	;0
323 136  DO_FCALL_BY_NAME/131      $138=     ?0                   ?0                  	;0
324 136  SEND_VAR_NO_REF_EX/50     ?80       $138                 ?1                  	;0
325 136  DO_FCALL_BY_NAME/131      $139=     ?0                   ?0                  	;0
326 136  ASSIGN/38                 ?131      16?8                 $139                	;0
327 137  INCLUDE_OR_EVAL/73        ?132      260:'session.php'    ?0                  	;2
328 138  INCLUDE_OR_EVAL/73        ?133      261:'functions.php'  ?0                  	;2
329 139  INIT_FCALL_BY_NAME/59     ?0        ?0                   262:'session_start' 	;0
330 139  DO_FCALL_BY_NAME/131      ?134      ?0                   ?0                  	;0
331 140  GOTO/253                  ?0        ?270                 ?264                	;0
332 142  IS_SMALLER/19             #144=     265:1                16?8                	;0
333 142  JMPZ/43                   ?0        #144                 ?335                	;0	>>335
334 143  GOTO/253                  ?0        ?301                 ?266                	;0
335 145  FETCH_STATIC_PROP_R/173   $145=     267:'rRequest'       268:'XUI'           	;0	<<333
336 145  FETCH_DIM_R/81            $146=     $145                 270:'action'        	;0
337 145  ASSIGN/38                 ?138      16?1                 $146                	;0
338 146  FETCH_STATIC_PROP_R/173   $148=     271:'rRequest'       272:'XUI'           	;0
339 146  ASSIGN/38                 ?140      16?0                 $148                	;0
340 147  UNSET_DIM/75              ?0        16?0                 274:'action'        	;0
341 148  INIT_FCALL_BY_NAME/59     ?0        ?0                   275:'count'         	;1
342 148  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
343 148  DO_FCALL_BY_NAME/131      $150=     ?0                   ?0                  	;0
344 148  IS_EQUAL/17               #151=     $150                 277:0               	;0
345 148  BOOL_NOT/13               #152=     #151                 ?0                  	;0
346 148  JMPZ/43                   ?0        #152                 ?348                	;0	>>348
347 149  GOTO/253                  ?0        ?9                   ?278                	;0
348 151  GOTO/253                  ?0        ?1                   ?279                	;0	<<346
349 155  INIT_FCALL_BY_NAME/59     ?0        ?0                   280:'json_encode'   	;1
350 155  SEND_VAL_EX/116           ?80       282:array (
  'result' => false,
) ?1                  	;0
351 155  DO_FCALL_BY_NAME/131      $153=     ?0                   ?0                  	;0
352 155  ECHO/40                   ?0        $153                 ?0                  	;0
353 156  EXIT/79                   ?0        ?0                   ?0                  	;0
354 157  GOTO/253                  ?0        ?356                 ?283                	;0
355 158  GOTO/253                  ?0        ?301                 ?284                	;0
356 161  NOP/0                     ?0        285:1                ?0                  	;4294967295
*/

?>