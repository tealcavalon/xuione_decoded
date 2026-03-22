<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?3                   ?0                  	;0	>>3
1   6    ECHO/40                   ?0        1:'" />
											</li>
										</ul>
									</div>
								</div> 
							</div> 
						</form>
					</div> 
				</div> 
			</div> 
		</div>
	</div>
</div>
' ?0                  	;0
2   7    GOTO/253                  ?0        ?100                 ?2                  	;0
3   9    INCLUDE_OR_EVAL/73        ?0        3:'session.php'      ?0                  	;2	<<0
4   10   INCLUDE_OR_EVAL/73        ?1        4:'functions.php'    ?0                  	;2
5   11   INIT_FCALL_BY_NAME/59     ?0        ?0                   5:'e6d500e19634D513'	;0
6   11   DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
7   11   JMPZ/43                   ?0        $4                   ?9                  	;0	>>9
8   12   GOTO/253                  ?0        ?11                  ?7                  	;0
9   14   INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'E72F42a93714ba87'	;0	<<7
10  14   DO_FCALL_BY_NAME/131      ?3        ?0                   ?0                  	;0
11  16   GOTO/253                  ?0        ?81                  ?10                 	;0
12  18   ECHO/40                   ?0        11:'<div class="wrapper boxed-layout"' ?0                  	;0
13  19   FETCH_IS/89               $6=       12:'_SERVER'         ?0                  	;0
14  19   ISSET_ISEMPTY_DIM_OBJ/115 #7=       $6                   13:'HTTP_X_REQUESTED_WITH'	;16777216
15  19   BOOL_NOT/13               #8=       #7                   ?0                  	;0
16  19   JMPZ_EX/46                #8=       #8                   ?24                 	;0	>>24
17  19   INIT_FCALL_BY_NAME/59     ?0        ?0                   14:'strtolower'     	;1
18  19   FETCH_FUNC_ARG/92         $9=       16:'_SERVER'         ?0                  	;1
19  19   FETCH_DIM_FUNC_ARG/93     $10=      $9                   17:'HTTP_X_REQUESTED_WITH'	;1
20  19   SEND_VAR_EX/66            ?80       $10                  ?1                  	;0
21  19   DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
22  19   IS_EQUAL/17               #12=      $11                  18:'xmlhttprequest' 	;0
23  19   BOOL/52                   #8=       #12                  ?0                  	;0
24  19   BOOL_NOT/13               #13=      #8                   ?0                  	;0	<<16
25  19   JMPZ/43                   ?0        #13                  ?27                 	;0	>>27
26  20   GOTO/253                  ?0        ?28                  ?19                 	;0
27  22   ECHO/40                   ?0        20:' style="display: none;"' ?0                  	;0	<<25
28  24   ECHO/40                   ?0        21:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
29  25   GOTO/253                  ?0        ?61                  ?22                 	;0
30  27   FETCH_DIM_R/81            $14=      16?0                 23:'exact_match'    	;0
31  27   IS_EQUAL/17               #15=      $14                  24:1                	;0
32  27   BOOL_NOT/13               #16=      #15                  ?0                  	;0
33  27   JMPZ/43                   ?0        #16                  ?35                 	;0	>>35
34  28   GOTO/253                  ?0        ?36                  ?25                 	;0
35  30   ECHO/40                   ?0        26:'checked '        ?0                  	;0	<<33
36  33   ECHO/40                   ?0        27:'data-plugin="switchery" class="js-switch" data-color="#039cfd"/>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item float-right">
												<input name="submit_ua" type="submit" class="btn btn-primary" value="' ?0                  	;0
37  34   GOTO/253                  ?0        ?54                  ?28                 	;0
38  36   ECHO/40                   ?0        29:'							<input type="hidden" name="edit" value="' ?0                  	;0
39  37   INIT_FCALL_BY_NAME/59     ?0        ?0                   30:'intval'         	;1
40  37   FETCH_DIM_FUNC_ARG/93     $17=      16?0                 32:'id'             	;1
41  37   SEND_VAR_EX/66            ?80       $17                  ?1                  	;0
42  37   DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
43  37   ECHO/40                   ?0        $18                  ?0                  	;0
44  38   ECHO/40                   ?0        33:'" />
							'    ?0                  	;0
45  40   ECHO/40                   ?0        34:'							<div id="basicwizard">
								<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
									<li class="nav-item">
										<a href="#useragent-details" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
											<i class="mdi mdi-account-card-details-outline mr-1"></i>
											<span class="d-none d-sm-inline">Details</span>
										</a>
									</li>
								</ul>
								<div class="tab-content b-0 mb-0 pt-0">
									<div class="tab-pane" id="useragent-details">
										<div class="row">
											<div class="col-12">
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="user_agent">User-Agent</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="user_agent" name="user_agent" value="' ?0                  	;0
46  41   GOTO/253                  ?0        ?69                  ?35                 	;0
47  44   ECHO/40                   ?0        36:'Edit'            ?0                  	;0
48  46   ECHO/40                   ?0        37:' User-Agent</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				<div class="card">
					<div class="card-body">
						<form action="#" method="POST" data-parsley-validate="">
							' ?0                  	;0
49  47   ISSET_ISEMPTY_CV/197      #19=      16?0                 ?0                  	;33554432
50  47   BOOL_NOT/13               #20=      #19                  ?0                  	;0
51  47   JMPZ/43                   ?0        #20                  ?53                 	;0	>>53
52  48   GOTO/253                  ?0        ?45                  ?38                 	;0
53  50   GOTO/253                  ?0        ?38                  ?39                 	;0	<<51
54  52   ISSET_ISEMPTY_CV/197      #21=      16?0                 ?0                  	;33554432
55  52   JMPZ/43                   ?0        #21                  ?57                 	;0	>>57
56  53   GOTO/253                  ?0        ?59                  ?40                 	;0
57  55   ECHO/40                   ?0        41:'Block'           ?0                  	;0	<<55
58  56   GOTO/253                  ?0        ?1                   ?42                 	;0
59  58   ECHO/40                   ?0        43:'Edit'            ?0                  	;0
60  59   GOTO/253                  ?0        ?1                   ?44                 	;0
61  61   INCLUDE_OR_EVAL/73        ?20       45:'topbar.php'      ?0                  	;2
62  62   ECHO/40                   ?0        46:'					</div>
					<h4 class="page-title">' ?0                  	;0
63  63   ISSET_ISEMPTY_CV/197      #23=      16?0                 ?0                  	;33554432
64  63   JMPZ/43                   ?0        #23                  ?66                 	;0	>>66
65  64   GOTO/253                  ?0        ?47                  ?47                 	;0
66  66   ECHO/40                   ?0        48:'Block'           ?0                  	;0	<<64
67  67   GOTO/253                  ?0        ?48                  ?49                 	;0
68  68   GOTO/253                  ?0        ?47                  ?50                 	;0
69  70   ISSET_ISEMPTY_CV/197      #24=      16?0                 ?0                  	;33554432
70  70   BOOL_NOT/13               #25=      #24                  ?0                  	;0
71  70   JMPZ/43                   ?0        #25                  ?73                 	;0	>>73
72  71   GOTO/253                  ?0        ?75                  ?51                 	;0
73  73   FETCH_DIM_R/81            $26=      16?0                 52:'user_agent'     	;0	<<71
74  73   ECHO/40                   ?0        $26                  ?0                  	;0
75  75   ECHO/40                   ?0        53:'" required data-parsley-trigger="change">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="exact_match">Exact Match</label>
													<div class="col-md-2">
														<input name="exact_match" id="exact_match" type="checkbox" ' ?0                  	;0
76  76   ISSET_ISEMPTY_CV/197      #27=      16?0                 ?0                  	;33554432
77  76   BOOL_NOT/13               #28=      #27                  ?0                  	;0
78  76   JMPZ/43                   ?0        #28                  ?80                 	;0	>>80
79  77   GOTO/253                  ?0        ?36                  ?54                 	;0
80  79   GOTO/253                  ?0        ?30                  ?55                 	;0	<<78
81  81   FETCH_STATIC_PROP_IS/176  $29=      56:'rRequest'        57:'XUI'            	;0
82  81   ISSET_ISEMPTY_DIM_OBJ/115 #30=      $29                  59:'id'             	;33554432
83  81   JMPZ_EX/46                #30=      #30                  ?92                 	;0	>>92
84  81   INIT_FCALL_BY_NAME/59     ?0        ?0                   60:'b603Bf039Aba700f'	;1
85  81   FETCH_STATIC_PROP_FUNC_ARG/177 $31=      62:'rRequest'        63:'XUI'            	;1
86  81   FETCH_DIM_FUNC_ARG/93     $32=      $31                  65:'id'             	;1
87  81   SEND_VAR_EX/66            ?80       $32                  ?1                  	;0
88  81   DO_FCALL_BY_NAME/131      $33=      ?0                   ?0                  	;0
89  81   ASSIGN/38                 $34=      16?0                 $33                 	;0
90  81   BOOL_NOT/13               #35=      $34                  ?0                  	;0
91  81   BOOL/52                   #30=      #35                  ?0                  	;0
92  81   BOOL_NOT/13               #36=      #30                  ?0                  	;0	<<83
93  81   JMPZ/43                   ?0        #36                  ?95                 	;0	>>95
94  82   GOTO/253                  ?0        ?97                  ?66                 	;0
95  84   INIT_FCALL_BY_NAME/59     ?0        ?0                   67:'e72f42A93714BA87'	;0	<<93
96  84   DO_FCALL_BY_NAME/131      ?35       ?0                   ?0                  	;0
97  86   ASSIGN/38                 ?36       16?1                 69:'Block User-Agent'	;0
98  87   INCLUDE_OR_EVAL/73        ?37       70:'header.php'      ?0                  	;2
99  88   GOTO/253                  ?0        ?12                  ?71                 	;0
100 90   INCLUDE_OR_EVAL/73        ?38       72:'footer.php'      ?0                  	;2
101 91   NOP/0                     ?0        73:1                 ?0                  	;4294967295
*/

?>