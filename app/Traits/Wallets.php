<?php 
namespace App\Traits;
use App\AdminWallet;
use App\Wallet;
use App\EarnWallet;
use App\User;
use Auth;

trait Wallets
{
    public $wallets =[
        'withdrawWallet'=>['title'=>'Withdraw wallet','bg'=>'primary'],
        'registerWallet'=>['title'=>'Register wallet','bg'=>'info'],
        'renewWallet'=>['title'=>'Renew wallet','bg'=>'danger'],
        'sponsorWallet'=>['title'=>'Sponsor wallet','bg'=>'warning'],
        'rankWallet'=>['title'=>'Rank wallet','bg'=>'primary'],
        'selfWallet'=>['title'=>'Generation income wallet','bg'=>'success'],
    ];

    protected function checkRenew(){
        $user_id= Auth::user()->id;
        $allIncome = $this->allIncome($user_id);
        $status = $allIncome/40;
        if($status > Auth::user()->renew){
            return true;
        }
        return false;
    }

    public $rank = [
        0=>['point'=>0, 'amount'=>0, 'prize'=>'', 'title'=>'No Rank'],
        1=>['point'=>225, 'amount'=>5, 'prize'=>'$ 5', 'title'=>'Associate'],
        2=>['point'=>900, 'amount'=>20, 'prize'=>'$ 20', 'title'=>'Promoter'],
        3=>['point'=>4000, 'amount'=>50, 'prize'=>'$ 50', 'title'=>'Consultant'],
        4=>['point'=>15000, 'amount'=>150, 'prize'=>'$ 150', 'title'=>'Executive'],
        5=>['point'=>60000, 'amount'=>500, 'prize'=>'$ 500 + laptop', 'title'=>'Emarald'],
        6=>['point'=>240000, 'amount'=>1800, 'prize'=>'$ 1,800', 'title'=>'Additional Director'],
        7=>['point'=>960000, 'amount'=>6000, 'prize'=>'$ 6,000', 'title'=>'Director'],
        8=>['point'=>15000000, 'amount'=>12500, 'prize'=>'$ 12,500', 'title'=>'Emarald Director'],
        9=>['point'=>983040, 'amount'=>2500000, 'prize'=>'$ 30,000', 'title'=>'Crown executive director'],
        10=>['point'=>60000000, 'amount'=>40000, 'prize'=>'$ 40,000', 'title'=>'Vice chairman'],
    ];
    
    public function wallets() {
        $wallets = [];
        foreach($this->wallets as $key=>$item){
            $wallets[$key] = $item['title'];
        }
        return $wallets;
    }

    public function balance($id,$wType)
    {
        $receipt = Wallet::where('user_id',$id)->where('wType',$wType)->sum('receipt');
        $payment = Wallet::where('user_id',$id)->where('wType',$wType)->sum('payment');
        $balance = $receipt-$payment;
        return $balance;
    }

    public function totalBalance($id,$wType)
    {
        $receipt = Wallet::where('user_id',$id)->where('wType',$wType)->sum('receipt');
        return $receipt;
    }

    public function allIncome($id)
    {
        $selfWallet = Wallet::where('user_id',$id)->whereIn('wType',['selfWallet'])->sum('receipt');
        $EarnWallet = EarnWallet::where('user_id',$id)->sum('receipt');
        $balance = $selfWallet+$EarnWallet;
        return $balance;
    }

    public function allBalance($id){
        $balances = [];
            foreach ($this->wallets as $key=>$value) {
                $balances[$key] = ['balance'=>$this->balance($id,$key),'title'=>$value['title'],'bg'=>$value['bg']];
            }
        return $balances;
    }

    public function listBalance($id,$wType)
    {
        $transaction = Wallet::where('user_id',$id)->where('wType',$wType)->latest()->take(10)->get();
        return $transaction;
    }


    public function youtubeBalance($id)
    {
        $receipt = EarnWallet::where('user_id',$id)->sum('receipt');
        $payment = EarnWallet::where('user_id',$id)->sum('payment');
        $balance = $receipt-$payment;
        return $balance;
    }

    public function userArray()
    {
        $user = User::all();
        $users=array();
        foreach ($user as $data) {
            $users[$data->id]= $data->id.' '.$data->name;
        }
        return $users;
    }

    public function percentage($amt,$percentage){
        return ($percentage / 100) * $amt;
    }
}