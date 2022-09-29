<script setup> 
    import Label from '@/components/InputLabel.vue' 
    import Input from '@/components/TextInput.vue' 
    import GuestLayout from '@/Layouts/GuestLayout.vue' 

    const emitTest = e => console.log(e)

</script>
<template> 
    <GuestLayout> 
        <Label value="件名">タイトル</Label> 
        <Input 
        modelValue="初期値です"
        @update:modelValue="emitTest"
        >
        </Input> 
    </GuestLayout> 
</template>
   