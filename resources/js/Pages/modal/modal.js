export const hideModal = (id = null)=>{
    let data =  {author: 'besnik-modal',  action: 'hideModal'};
    if(id){
        data.id = id;
    }

    postMessage(data, window.origin)
}


export const openModal = (id = null)=>{
    let data =  {author: 'besnik-modal',   action: 'showModal'};
    if(id){
        data.id = id;
    }
    postMessage(data, window.origin)
}
