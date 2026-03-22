<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?73                  ?0                  	;0	>>73
1   5    ECHO/40                   ?0        1:' style="display: none;"' ?0                  	;0
2   7    ECHO/40                   ?0        2:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
3   8    INCLUDE_OR_EVAL/73        ?0        3:'topbar.php'       ?0                  	;2
4   9    ECHO/40                   ?0        4:'					</div>
					<h4 class="page-title">' ?0                  	;0
5   10   GOTO/253                  ?0        ?24                  ?5                  	;0
6   13   ASSIGN/38                 ?1        16?0                 6:'View Ticket'     	;0
7   14   INCLUDE_OR_EVAL/73        ?2        7:'header.php'       ?0                  	;2
8   15   ECHO/40                   ?0        8:'<div class="wrapper boxed-layout-ext"' ?0                  	;0
9   16   FETCH_IS/89               $8=       9:'_SERVER'          ?0                  	;0
10  16   ISSET_ISEMPTY_DIM_OBJ/115 #9=       $8                   10:'HTTP_X_REQUESTED_WITH'	;16777216
11  16   BOOL_NOT/13               #10=      #9                   ?0                  	;0
12  16   JMPZ_EX/46                #10=      #10                  ?20                 	;0	>>20
13  16   INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'strtolower'     	;1
14  16   FETCH_FUNC_ARG/92         $11=      13:'_SERVER'         ?0                  	;1
15  16   FETCH_DIM_FUNC_ARG/93     $12=      $11                  14:'HTTP_X_REQUESTED_WITH'	;1
16  16   SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
17  16   DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
18  16   IS_EQUAL/17               #14=      $13                  15:'xmlhttprequest' 	;0
19  16   BOOL/52                   #10=      #14                  ?0                  	;0
20  16   BOOL_NOT/13               #15=      #10                  ?0                  	;0	<<12
21  16   JMPZ/43                   ?0        #15                  ?23                 	;0	>>23
22  17   GOTO/253                  ?0        ?2                   ?16                 	;0
23  19   GOTO/253                  ?0        ?1                   ?17                 	;0	<<21
24  21   FETCH_DIM_R/81            $16=      16?1                 18:'title'          	;0
25  21   ECHO/40                   ?0        $16                  ?0                  	;0
26  22   ECHO/40                   ?0        19:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				<div class="timeline" dir="ltr">
					' ?0                  	;0
27  23   FETCH_DIM_R/81            $17=      16?1                 20:'replies'        	;0
28  23   FE_RESET_R/77             $18=      $17                  ?70                 	;0
29  23   FE_FETCH_R/78             ?0        $18                  16?2                	;70	>>70	<<69
30  24   NOP/0                     ?0        ?0                   ?0                  	;1
31  24   GOTO/253                  ?0        ?32                  ?21                 	;0
32  26   ECHO/40                   ?0        22:'					<article class="timeline-item' ?0                  	;0
33  27   FETCH_DIM_R/81            $19=      16?2                 23:'admin_reply'    	;0
34  27   JMPZ/43                   ?0        $19                  ?37                 	;0	>>37
35  28   NOP/0                     ?0        ?0                   ?0                  	;1
36  28   GOTO/253                  ?0        ?38                  ?24                 	;0
37  30   ECHO/40                   ?0        25:' timeline-item-left' ?0                  	;0	<<34
38  32   ECHO/40                   ?0        26:'">
						<div class="timeline-desk">
							<div class="timeline-box">
								<span class="arrow-alt"></span>
								<span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
								<h4 class="mt-0 font-16">' ?0                  	;0
39  33   NOP/0                     ?0        ?0                   ?0                  	;1
40  33   GOTO/253                  ?0        ?44                  ?27                 	;0
41  35   ECHO/40                   ?0        28:'</p>
							</div>
						</div>
					</article>
					' ?0                  	;0
42  37   NOP/0                     ?0        ?0                   ?0                  	;1
43  37   GOTO/253                  ?0        ?69                  ?29                 	;0
44  39   FETCH_DIM_R/81            $20=      16?2                 30:'admin_reply'    	;0
45  39   BOOL_NOT/13               #21=      $20                  ?0                  	;0
46  39   JMPZ/43                   ?0        #21                  ?49                 	;0	>>49
47  40   NOP/0                     ?0        ?0                   ?0                  	;1
48  40   GOTO/253                  ?0        ?52                  ?31                 	;0
49  42   ECHO/40                   ?0        32:'Admin'           ?0                  	;0	<<46
50  43   NOP/0                     ?0        ?0                   ?0                  	;1
51  43   GOTO/253                  ?0        ?57                  ?33                 	;0
52  45   FETCH_DIM_R/81            $22=      16?1                 34:'user'           	;0
53  45   FETCH_DIM_R/81            $23=      $22                  35:'username'       	;0
54  45   ECHO/40                   ?0        $23                  ?0                  	;0
55  46   NOP/0                     ?0        ?0                   ?0                  	;1
56  46   GOTO/253                  ?0        ?57                  ?36                 	;0
57  49   ECHO/40                   ?0        37:'</h4>
								<p class="text-muted"><small>' ?0                  	;0
58  50   INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'date'           	;2
59  50   SEND_VAL_EX/116           ?80       40:'Y-m-d H:i'       ?1                  	;0
60  50   FETCH_DIM_FUNC_ARG/93     $24=      16?2                 41:'date'           	;2
61  50   SEND_VAR_EX/66            ?96       $24                  ?2                  	;0
62  50   DO_FCALL_BY_NAME/131      $25=      ?0                   ?0                  	;0
63  50   ECHO/40                   ?0        $25                  ?0                  	;0
64  51   ECHO/40                   ?0        42:'</small></p>
								<p class="mb-0">' ?0                  	;0
65  52   FETCH_DIM_R/81            $26=      16?2                 43:'message'        	;0
66  52   ECHO/40                   ?0        $26                  ?0                  	;0
67  53   NOP/0                     ?0        ?0                   ?0                  	;1
68  53   GOTO/253                  ?0        ?41                  ?44                 	;0
69  54   JMP/42                    ?0        ?29                  ?0                  	;0	>>29
70  54   FE_FREE/127               ?0        $18                  ?0                  	;0	<<28
71  57   ECHO/40                   ?0        45:'				</div>
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
72  58   GOTO/253                  ?0        ?112                 ?46                 	;0
73  60   INCLUDE_OR_EVAL/73        ?22       47:'session.php'     ?0                  	;2	<<0
74  61   INCLUDE_OR_EVAL/73        ?23       48:'functions.php'   ?0                  	;2
75  62   INIT_FCALL_BY_NAME/59     ?0        ?0                   49:'E6d500E19634d513'	;0
76  62   DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
77  62   JMPZ/43                   ?0        $29                  ?79                 	;0	>>79
78  63   GOTO/253                  ?0        ?81                  ?51                 	;0
79  65   INIT_FCALL_BY_NAME/59     ?0        ?0                   52:'e72f42a93714Ba87'	;0	<<77
80  65   DO_FCALL_BY_NAME/131      ?25       ?0                   ?0                  	;0
81  67   GOTO/253                  ?0        ?82                  ?54                 	;0
82  69   FETCH_STATIC_PROP_IS/176  $31=      55:'rRequest'        56:'XUI'            	;0
83  69   ISSET_ISEMPTY_DIM_OBJ/115 #32=      $31                  58:'id'             	;33554432
84  69   BOOL_NOT/13               #33=      #32                  ?0                  	;0
85  69   JMPNZ_EX/47               #33=      #33                  ?94                 	;0	>>94
86  69   INIT_FCALL_BY_NAME/59     ?0        ?0                   59:'DEf05eCdB21b0A50'	;1
87  69   FETCH_STATIC_PROP_FUNC_ARG/177 $34=      61:'rRequest'        62:'XUI'            	;1
88  69   FETCH_DIM_FUNC_ARG/93     $35=      $34                  64:'id'             	;1
89  69   SEND_VAR_EX/66            ?80       $35                  ?1                  	;0
90  69   DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
91  69   ASSIGN/38                 $37=      16?1                 $36                 	;0
92  69   BOOL_NOT/13               #38=      $37                  ?0                  	;0
93  69   BOOL/52                   #33=      #38                  ?0                  	;0
94  69   BOOL_NOT/13               #39=      #33                  ?0                  	;0	<<85
95  69   JMPZ/43                   ?0        #39                  ?97                 	;0	>>97
96  70   GOTO/253                  ?0        ?99                  ?65                 	;0
97  72   INIT_FCALL_BY_NAME/59     ?0        ?0                   66:'E72F42a93714BA87'	;0	<<95
98  72   DO_FCALL_BY_NAME/131      ?35       ?0                   ?0                  	;0
99  74   FETCH_DIM_R/81            $41=      16?3                 68:'id'             	;0
100 74   FETCH_DIM_R/81            $42=      16?1                 69:'member_id'      	;0
101 74   IS_NOT_EQUAL/18           #43=      $41                  $42                 	;0
102 74   BOOL_NOT/13               #44=      #43                  ?0                  	;0
103 74   JMPZ/43                   ?0        #44                  ?105                	;0	>>105
104 75   GOTO/253                  ?0        ?6                   ?70                 	;0
105 77   INIT_METHOD_CALL/112      ?0        16?4                 71:'query'          	;2	<<103
106 77   SEND_VAL_EX/116           ?80       73:'UPDATE `tickets` SET `admin_read` = 1 WHERE `id` = ?;' ?1                  	;0
107 77   FETCH_STATIC_PROP_FUNC_ARG/177 $45=      74:'rRequest'        75:'XUI'            	;2
108 77   FETCH_DIM_FUNC_ARG/93     $46=      $45                  77:'id'             	;2
109 77   SEND_VAR_EX/66            ?96       $46                  ?2                  	;0
110 77   DO_FCALL/60               ?42       ?0                   ?0                  	;0
111 78   GOTO/253                  ?0        ?6                   ?78                 	;0
112 80   INCLUDE_OR_EVAL/73        ?43       79:'footer.php'      ?0                  	;2
113 81   NOP/0                     ?0        80:1                 ?0                  	;4294967295
*/

?>